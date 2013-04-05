<?php
//Cette fonction doit �tre appel�e avant tout code html
session_name('admin');
session_start();

//On donne ensuite un titre � la page, puis on appelle notre fichier debut.php
$titre = "Voir un topic";
//include("includes/bbcode.php"); //On verra plus tard ce qu'est ce fichier
include("function.php");

connexion();

//On r�cup�re la valeur de t
$topic = (int) $_GET['t'];

//on met cette valeur en session
$_SESSION['t'] = $topic;

//A partir d'ici, on va compter le nombre de messages pour n'afficher que les 15 premiers
$requete1 = mysql_query("
SELECT topic_titre, topic_post, forum_topic.forum_id, topic_last_post,
forum_name, auth_view, auth_topic, auth_post 
FROM forum_topic 
LEFT JOIN forum_forum ON forum_topic.forum_id = forum_forum.forum_id 
WHERE topic_id = '".$topic."'") or die (mysql_error());
$data1 = mysql_fetch_assoc($requete1);

$totalDesMessages = $data1['topic_post'] + 1;
$nombreDeMessagesParPage = 20;
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
            <?php
            if(!isset($_SESSION['login'])) {?>
            <div id="centreForum">
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
            <div id="centreForum">
                <div class="title">
                    <a href ="./forum.php" style="text-decoration:none;color:black;">Forum</a> ><a href="./voirforum.php?f=<?php echo $data1['forum_id'] ?>" style="text-decoration:none;color:black;"> <?php echo stripslashes(htmlspecialchars($data1['forum_name'])); ?></a> > <a href="./voirtopic.php?t=<?php echo $topic ?>" style="text-decoration:none;color:black;"><?php echo stripslashes(htmlspecialchars($data1['topic_titre'])); ?></a>
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


                            //On affiche l'image r�pondre
                            echo '<div class="boutons_saut_forum"><p class="reponse_ajout_sujet"><table style="margin-left:12px;"><tr><td><a style="color:white;padding-top:3px;" href="./poster.php?action=repondre&amp;t='.$topic.'" class="bouton_action">R&eacute;pondre</a></td><td><a style="color:white;padding-top:3px;" href="./poster.php?action=nouveautopic&amp;f='.$data1['forum_id'].'" class="bouton_action">Nouveau sujet</a></td></tr></table></p></div>';

                            ?>
                        <table class="liste_cat">
                            <thead>
                                <tr>
                                    <th colspan="8" style="border:1px #C7D6E0 solid">Page :
                                            <?php
                                            //On affiche les pages 1-2-3 etc...

                                            for ($i = 1 ; $i <= $nombreDePages ; $i++) {
                                                if ($i == $page) //On affiche pas la page actuelle en lien
                                                {
                                                    echo $i;
                                                }
                                                else {
                                                    echo '<a href="voirtopic.php?t='.$topic.'&page='.$i.'">
            ' . $i . '</a> ';
                                                }
                                            }
                                            ?>
                                    </th>
                                </tr>
                                    <?php
                                    $premierMessageAafficher = ($page - 1) * $nombreDeMessagesParPage;

                                    //Enfin on commence la boucle !
                                    $requete2 = mysql_query('
        SELECT post_id , post_createur , post_texte , post_time ,
        membre_id, membre_pseudo, membre_inscrit, membre_avatar, membre_localisation, membre_post, membre_signature
        FROM forum_post
        LEFT JOIN forum_membres ON forum_membres.membre_id = forum_post.post_createur
        WHERE topic_id ="'.$topic.'"
        ORDER BY post_id
        LIMIT ' . $premierMessageAafficher . ', ' . $nombreDeMessagesParPage . '')or die(mysql_error());

                                    //On v�rifie que la requ�te a bien retourn� des messages
                                    if (mysql_num_rows($requete2) < 1) {
                                        echo'<p>Il n y a aucun post sur ce topic, v�rifiez l url et reessayez</p></thead>';
                                    }

                                    //Si tout roule on affiche notre tableau puis on remplit avec une boucle
                                    else {
                                        ?>

                                <tr style="background-image:url(images/bg_forum_cat.png);background-repeat:repeat-x;height:30px;color:#FFFFFF;">
                                    <th class="centre"><strong>Auteurs</strong></th>
                                    <th class="centre"><strong>Messages</strong></th>
                                </tr>
                            </thead>
                            <tbody>

                                        <?php
                                        while ($data2 = mysql_fetch_assoc($requete2)) {
                                        //On commence a afficher le pseudo du cr�ateur du message :
                                        //On v�rifie les droits du membre
                                        //(partie du code comment�e plus tard)
                                            echo'<tr class="header_message" style="border-right:1px solid #C7D6E0;"><td style="border:1px #C7D6E0 solid"><strong>
         <a href="./voirprofil.php?m='.$data2['membre_id'].'&amp;action=consulter">
         '.stripslashes(htmlspecialchars($data2['membre_pseudo'])).'</a></strong></td>';

         /* Si on est l'auteur du message, on affiche des liens pour
         Moderer celui-ci.
         Les moderateurs pourront aussi le faire, il faudra donc revenir sur
         ce code un peu plus tard ! */     

                                            if (intval($_SESSION['id']) == $data2['post_createur']) {
                                                echo'<td id=p_'.$data2['post_id'].' style="border:1px #C7D6E0 solid">Post&eacute; le '.date('H\hi \l\e d M y',$data2['post_time']).'
         <a href="action/postok.php?p='.$data2['post_id'].'&amp;action=delete">
         <img src="images/icons/error-32x32.png" alt="Supprimer"
         title="Supprimer ce message" /></a>   
         <a href="./poster.php?p='.$data2['post_id'].'&amp;action=edit">
         <img src="images/icons/cc-edit-16x16.png" alt="Editer"
         title="Editer ce message" /></a></td></tr>';
                                            }
                                            else {
                                                echo'<td class="dates">
         Post&eacute; le '.date('H\hi \l\e d M y',$data2['post_time']).'
         </td></tr>';
                                            }

                                            //Message
                                            echo'<tr style="border-right:1px solid #C7D6E0;"><td style="border:1px #C7D6E0 solid">'.$data2['membre_avatar'].'</td><td style="border:1px #C7D6E0 solid">'.code(nl2br(stripslashes(htmlspecialchars($data2['post_texte'])))).'
         <br /><hr style="width:50%;margin-left:0px;color:#C7D6E0;" />'.code(nl2br(stripslashes(htmlspecialchars($data2['membre_signature'])))).'</td></tr>';
                                        } //Fin de la boucle ! \o/

                                        ?>
                                <tr style="border-top:1px #C7D6E0 solid" class="liste_cat">
                                    <th colspan="8" style="border-top:1px #C7D6E0 solid" class="liste_cat">Page :
                                                <?php
                                                //On affiche les pages 1-2-3 etc...

                                                for ($i = 1 ; $i <= $nombreDePages ; $i++) {
                                                    if ($i == $page) //On affiche pas la page actuelle en lien
                                                    {
                                                        echo $i;
                                                    }
                                                    else {
                                                        echo '<a href="voirtopic.php?t='.$topic.'&page='.$i.'">
            ' . $i . '</a> ';
                                                    }
                                                }
                                                ?>
                                    </th>
                                </tr>
                            </tbody>

                        </table>

                                <?php
                                //On ajoute 1 au nombre de visites de ce topic
                                mysql_query('UPDATE forum_topic
        SET topic_vu = topic_vu + 1 WHERE topic_id = '.$topic.'');

                            } //Fin du if qui v�rifiait si le topic contenait au moins un message


                            ?>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div id="menuDroiteForum">
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
                                <p>Ajouter autant de sujet que vous le souhaitez en cliquant sur "Nouveau sujet". N'h&eacute;sitez surtout pas &agrave; r&eacute;pondre au sujet d&eacute;j&agrave; post&eacute; </p>
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
    </body>
</html>
