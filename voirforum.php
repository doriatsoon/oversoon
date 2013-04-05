<?php
//Cette fonction doit �tre appel�e avant tout code html
session_name('admin');
@session_start();

$titre = "Voir un forum";
include("function.php");

//Maintenant, on se connecte � la base de donn�es
connexion();
//On r�cup�re la valeur de f
$forum = (int) $_GET['f'];
$_SESSION['f'] = $forum;
//A partir d'ici, on va compter le nombre de messages
//pour n'afficher que les 25 premiers
$requete1 = mysql_query("SELECT forum_name, forum_topic, auth_view, auth_topic FROM forum_forum WHERE forum_id = '".$forum."'") or die (mysql_error());
$data1 = mysql_fetch_assoc($requete1);
$totalDesMessages = $data1['forum_topic'] + 1;
$nombreDeMessagesParPage = 25;
$nombreDePages = ceil($totalDesMessages / $nombreDeMessagesParPage);

//nombre de connect�s
if(isset($_SESSION['nbrconnectes'])) {
    $nbrconnectes = $_SESSION['nbrconnectes'];
}

//récupération de l'id du membre
$idMembre = $_SESSION['id'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">    
    <head>        
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Oversoon.fr
        </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>        
        <div id="page">
            <div id="bando">
                <div id="bienvenue">Bienvenue sur Oversoon
                </div>
            </div>
            <div id="barremenu">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="videos.php">Vid&eacute;oth&egrave;que</a></li>
                    <li><a href="liens.php">Liens</a></li>
                    <li><a href="contactezMoi.php">Contactez-moi</a></li>
                    <li><a href="forum.php" class="active">Forum</a></li>
                </ul>
            </div>
            <!-- Si l'utilisateur est pas connecte -->
<?php
            if(!isset($_SESSION['login'])) {?>
            <div id="centre">
                <div class="title">
                    <a href ="forum.php" style="text-decoration:none;color:black;">Forum</a> > <?php echo stripslashes(htmlspecialchars($data1['forum_name']));?>
                </div>
                <hr style="margin-left:15px;margin-right:10px;margin-bottom:50px;" size="1"/>
                <div style="text-align:left;width:20%;margin-left:15px;display:inline;float:left;position:relative;">
                    <img src="images/icons/ti-2dialog-error-80x80.gif"/>
                </div>
                <div style="text-align:left;width:75%;margin-top:35px;font-weight:bold;color:red;display:inline;float:left;position:relative;">
                    Vous devez &ecirc;tre connect&eacute; pour acc&eacute;der au forum.
                </div>
            </div>
<?php
            }else {
                ?>
            <!-- Si l'utilisateur est connecte -->
            <div id="centre">
                <div class="title">
                    <a href ="forum.php" style="text-decoration:none;color:black;">Forum</a> > <?php echo stripslashes(htmlspecialchars($data1['forum_name']));?>
                </div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div id="content">
                    <div id="corps_forum">
    <?php
                            //Nombre de pages
                            if (isset($_GET['page'])) {
                                $page = intval($_GET['page']);
                            }
                            else {
                                $page = 1;
                            }

                            //Et le bouton pour poster
                            echo'<p class="reponse_ajout_sujet" style="margin-left:15px;"><a href="./poster.php?action=nouveautopic&amp;f='.$forum.'" class="bouton_action" style="color:white;padding-top:3px;" >Nouveau sujet</a></p>';
                            ?>

                        <table class="liste_cat">
                            <thead>
                                <tr>
                                    <th colspan="8" style="border:1px #C7D6E0 solid">Page :

    <?php //On affiche les pages 1-2-3, etc.
                                            for ($i = 1 ; $i <= $nombreDePages ; $i++) {
                                                if ($i == $page) { //On ne met pas de lien sur la page actuelle
                                                    echo $i;
                                                }
                                                else {
                                                    echo '<a href="voirforum.php?f='.$forum.'&amp;page='.$i.'">'.$i.'</a>';
                                                }
                                            }
                                            ?>

                                    </th>
                                </tr>
                                <tr style="background-image:url(images/bg_forum_cat.png);background-repeat:repeat-x;height:30px;color:#FFFFFF;">
                                    <th class="cats_colonne_flag">&nbsp;</th>
                                    <th class="centre_cat">Titre du sujet</th>
                                    <th class="centre_cat">R&eacute;ponse</th>
                                    <th class="centre_cat">Vu</th>
                                    <th class="centre_cat">Cr&eacute;ateur</th>
                                    <th class="centre_cat">Dernier message</th>
                                </tr>
                            </thead>
    <?php
                                $premierMessageAafficher = ($page - 1) * $nombreDeMessagesParPage;


                                //On prend tout ce qu'on a sur les Annonces du forum
                                $requete3 = mysql_query('SELECT forum_topic.topic_id, topic_titre, topic_createur, topic_vu, topic_post, topic_time, topic_last_post,
                Mb.membre_pseudo AS membre_pseudo_createur, post_createur, post_time, Ma.membre_pseudo AS membre_pseudo_last_posteur FROM forum_topic 
                LEFT JOIN forum_membres Mb ON Mb.membre_id = forum_topic.topic_createur
                LEFT JOIN forum_post ON forum_topic.topic_last_post = forum_post.post_id
                LEFT JOIN forum_membres Ma ON Ma.membre_id = forum_post.post_createur    
                WHERE topic_genre = "Annonce" AND forum_topic.forum_id = "'.$forum.'" 
                ORDER BY topic_last_post DESC');

                                //On lance notre tableau seulement s'il y a des requ�tes !
                                if (mysql_num_rows($requete3) > 0) {
                                    ?>
                            <tbody class="sous_cat ligne_impaire">

        <?php
                                        //On commence la boucle
                                        while ($data3 = mysql_fetch_assoc($requete3)) {
                                        //Pour chaque topic :
                                        //Si le topic est une annonce on l'affiche en haut
                                        //mega echo de bourrain pour tout remplir

                                            echo'<tr ><td><img src="./images/annonce.gif" alt="Annonce" /></td>
                    <td id="titre"><strong>Annonce : </strong>
                    <strong><a href="./voirtopic.php?t='.$data3['topic_id'].'"                 
                    title="Topic commenc� �
                    '.date('H\hi \l\e d M,y',$data3['topic_time']).'">
                    '.stripslashes(htmlspecialchars($data3['topic_titre'])).'</a></strong></td>
                    <td class="nombremessages">'.$data3['topic_post'].'</td>
                    <td class="nombrevu">'.$data3['topic_vu'].'</td>
                    <td><a href="./voirprofil.php?m='.$data3['topic_createur'].'
                    &amp;action=consulter">
                    '.stripslashes(htmlspecialchars($data3['membre_pseudo_createur'])).'</a></td>';
                                            //Selection dernier message
                                            $nombreDeMessagesParPage = 15;
                                            $nbr_post = $data3['topic_post'] +1;
                                            $page = ceil($nbr_post / $nombreDeMessagesParPage);
                                            echo '<td class="dernier_msg centre">Par '.stripslashes(htmlspecialchars($data3['membre_pseudo_createur'])).'<br />
                    A <a href="./voirtopic.php?t='.$data3['topic_id'].'&amp;page='.$page.'#p_'.$data3['post_id'].'">'.date('H\hi \l\e d M y',$data3['post_time']).'</a></td></tr>';
                                        }
                                        ?>
                            </tbody>
                                    <?php
    }

                                //On prend tout ce qu'on a sur les topics normaux du forum
                                $requete3 = mysql_query('SELECT forum_topic.topic_id, topic_titre, topic_createur, topic_vu, topic_post, topic_time, topic_last_post,
                Mb.membre_pseudo AS membre_pseudo_createur, post_createur, post_time, Ma.membre_pseudo AS membre_pseudo_last_posteur FROM forum_topic
                LEFT JOIN forum_membres Mb ON Mb.membre_id = forum_topic.topic_createur
                LEFT JOIN forum_post ON forum_topic.topic_last_post = forum_post.post_id
                LEFT JOIN forum_membres Ma ON Ma.membre_id = forum_post.post_createur   
                WHERE topic_genre <> "Annonce" AND forum_topic.forum_id = "'.$forum.'"
                ORDER BY topic_last_post DESC
                LIMIT ' . $premierMessageAafficher . ', ' . $nombreDeMessagesParPage .'')
                                    or die (mysql_error());
                                if (mysql_num_rows($requete3) > 0) {
                                    ?>
                            <tbody class="sous_cat ligne_impaire">

                                    <?php
        //On lance la boucle
        while ($data3 = mysql_fetch_assoc($requete3)) {
                                        //Ah bah tiens... re vla l'echo de fou
                                            echo'<tr class="sous_cat"><td class="sous_cat"><img src="images/nouveau_message.png" alt="Nouvelles r�ponses, jamais particip�" title="Nouvelles r�ponses, jamais particip�">
</td>
                <td class="centre">
                <strong><a href="./voirtopic.php?t='.$data3['topic_id'].'"                 
                title="Topic commenc� �
                '.date('H\hi \l\e d M,y',$data3['topic_time']).'">
                '.stripslashes(htmlspecialchars($data3['topic_titre'])).'</a></strong></td>
                <td class="centre">'.$data3['topic_post'].'</td>
                <td class="centre">'.$data3['topic_vu'].'</td>
                <td class="centre"><a href="./voirprofil.php?m='.$data3['topic_createur'].'
                &amp;action=consulter">
                '.stripslashes(htmlspecialchars($data3['membre_pseudo_createur'])).'</a></td>';
                                            //Selection dernier message
                                            $nombreDeMessagesParPage = 15;
                                            $nbr_post = $data3['topic_post'] +1;
                                            $page = ceil($nbr_post / $nombreDeMessagesParPage);
                                            echo '<td class="dernier_msg centre">Par
                <a href="./voirprofil.php?m='.$data3['post_createur'].'
                &amp;action=consulter">
                '.stripslashes(htmlspecialchars($data3['membre_pseudo_last_posteur'])).'</a><br />
                A <a href="./voirtopic.php?t='.$data3['topic_id'].'&amp;page='.$page.'#p_'.$data3['post_id'].'">'.date('H\hi \l\e d M y',$data3['post_time']).'</a></td></tr>';
                                        }
                                        ?>
                            </tbody>
                                    <?php
                                    }
    else //S'il n'y a pas de message
                                {
                                    echo'<tr><td colspan="5" style="margin-left:15px;">Ce forum ne contient aucun sujet actuellement</td></tr>';
                                }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
<?php } ?>             
            <div id="menuDroite">
<?php if(!isset($_SESSION['login'])) {?>
                <div class="title">Se connecter
                </div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="contentDroite">
                    <form action="action/authentificationAction.php" method="post">
                        <table style="width:100%;">
                            <tr>
                                <td style="text-align:left;width:30%;padding-left:15px;">Login:</td>
                                <td style="text-align:left;width:70%;">
                                    <input type="text" name="login"/></td>
                            </tr>
                            <tr>
                                <td style="text-align:left;width:30%;padding-left:15px;">Pass:</td>
                                <td style="text-align:left;width:70%;">
                                    <input type="password" name="pass"/></td>
                            </tr>
                            <tr>
                                <td style="text-align:left;width:30%;padding-left:15px;">Connexion:</td>
                                <td style="text-align:left;width:70%;">
                                    <input type="submit" value="Me connecter"/></td>
                            </tr>
                        </table>
                    </form>
                </div>
<?php } else {?>
                <div class="title">Espace membre
                </div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="contentDroite">
    <?php if($_SESSION['role'] == "administrateur") {?>
                    <!-- Cas ou l'utilisateur est admin-->
                    <table style="width:100%;">
                        <tr>
                            <td style="padding-left:15px;">
                                <img src="images/icons/cc-kuser-32x32.gif" alt="user"/></td>
                            <td style="text-align:left;width:90%;">
        <?php echo $_SESSION['prenom'];echo " (".$_SESSION['role'].")"?></td>
                        </tr>
                        <tr>
                            <td style="text-align:left;width:50%;padding-left:10px;" colspan="2">
                                <a href="action/deconnexionAction.php" style="text-decoration:none;color:#003322;">
                                    <img src="images/icons/ti-system-log-out-32x32.gif" title="Se d&eacute;connecter" alt="Se d&eacute;connecter"/></a></td>
                        </tr>
                    </table>
    <?php }else {?>
                    <!-- Cas ou l'utilisateur est user-->
                    <table style="width:100%;">
                        <tr>
                            <td style="padding-left:15px;">
                                <img src="images/icons/cc-kuser-32x32.gif" alt="user"/></td>
                            <td style="text-align:left;width:90%;">
        <?php echo $_SESSION['prenom'];echo " (".$_SESSION['role'].")"?></td>
                        </tr>
                        <tr>
                            <td style="text-align:left;width:50%;padding-left:10px;" colspan="2"><a href="modifierProfil.php?id=<?php echo $idMembre;?>" style="text-decoration:none;color:#003322;"><img src="images/icons/kate-32x32.png" title="Modifier son profil" alt="Modifier son profil"/></a><a href="action/deconnexionForumAction.php" style="text-decoration:none;color:#003322;"><img src="images/icons/ti-system-log-out-32x32.gif" title="Se d&eacute;connecter" alt="Se d&eacute;connecter"/></a></td>
                        </tr>
                    </table>

    <?php
    }?>
                </div>
                    <?php } ?>
                <div class="title">Information</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="contentDroite">                   
                    <table style="width:100%;">
                        <tr>
                            <td style="text-align:justify;width:70%;padding-left:15px;padding-right:10px;" colspan="2">
                                <p>Ajouter autant de sujet que vous le souhaitez en cliquant sur "Nouveau sujet".</p>
                            </td>
                        </tr>                        
                        <tr>
                            <td style="text-align:left;width:30%;padding-left:15px;" colspan="2"><?php echo $messageUser; ?></td>
                        </tr>
                    </table>
                </div>    
                <div class="title">Nombre de connect&eacute;s</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="contentDroite">                   
                    <table style="width:100%;">                        
                        <tr>
                            <td style="text-align:left;width:30%;padding-left:15px;" colspan="2"><?php echo $nbrconnectes; ?></td>
                        </tr>

                    </table>
                </div>          
            </div>
        </div>
        <div id="basPage" style="margin-top:50px;">
            <div class="content">
                <p align="center" class="maj">
                    <a href="planSite.php" class="lienPagination">Plan du site</a> |
                    <a href="mentionslegales.php" class="lienPagination">Mentions l&eacute;gales</a>
                </p>
                <p align="center" style="margin-top:20px;">
                    <a href="http://validator.w3.org/check?uri=referer">
                        <img src="http://www.w3.org/Icons/valid-xhtml10-blue" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
                    <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/2.0/fr/">
                        <img alt="Creative Commons License" style="border-width:0" src="http://creativecommons.org/images/public/somerights20.png" /></a>
                </p>
            </div>
        </div>
    </body>
</html>