<?php
session_name('admin');
@session_start();

include('function.php');
connexion();

//D�terminons le niveau d'acc�s du visiteur
$level = (isset($_SESSION['level'])) ? intval($_SESSION['level']) : 1;

//Cette requete permet d'obtenir tout sur le forum
$requete2 = mysql_query('
SELECT cat_id, cat_nom, 
forum_forum.forum_id, forum_name, forum_desc, forum_post, forum_topic, auth_view, forum_topic.topic_id,  forum_topic.topic_post, post_id, post_time, post_createur, membre_pseudo, 
membre_id 
FROM forum_categorie
LEFT JOIN forum_forum ON forum_categorie.cat_id = forum_forum.forum_cat_id
LEFT JOIN forum_post ON forum_post.post_id = forum_forum.forum_last_post_id
LEFT JOIN forum_topic ON forum_topic.topic_id = forum_post.topic_id
LEFT JOIN forum_membres ON forum_membres.membre_id = forum_post.post_createur
WHERE auth_view < ' . $level . ' 
ORDER BY cat_ordre, forum_ordre DESC') or die('SQL Error');


//requete du nombre de sujet
//requete pour qui est en ligne?
$requete3 = mysql_query("SELECT membre_id FROM forum_membres");
$TotalDesMembres = mysql_num_rows($requete3);

$requete4 = mysql_query("SELECT membre_pseudo, membre_id FROM forum_membres ORDER BY membre_id DESC LIMIT 0, 1");
$data4 = mysql_fetch_assoc($requete4);
$derniermembre = stripslashes(htmlspecialchars($data4['membre_pseudo']));

//récupération de l'id du membre
if (isset($_SESSION['id'])) {
    $idMembre = $_SESSION['id'];
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Oversoon.fr</title>
        <?php include 'cssFile.php'; ?>
        <?php include 'javascriptFile.php'; ?>
    </head>

    <body>
        <div id="page">
<?php include 'bandeau.php'; ?>
<?php include 'menu.php'; ?>

            <!-- Si l'utilisateur est pas connect+� -->
            <?php if (!isset($_SESSION['login'])) { ?>
                <div id="centre">
                    <div class="title">Forum</div>
                    <hr style="margin-left:15px;margin-right:10px;margin-bottom:50px;" size="1"/>
                    <div style="text-align:left;width:20%;margin-left:15px;display:inline;float:left;position:relative;">
                        <img src="images/icons/ti-2dialog-error-80x80.gif"/>
                    </div>
                    <div style="text-align:left;width:75%;margin-top:35px;font-weight:bold;color:red;display:inline;float:left;position:relative;">
                        Cet onglet est r&eacute;serv&eacute; aux membres de ce site. 
                    </div>
                </div>
    <?php
} else {
    ?>

                <div id="centre">
                    <div class="title">Forum</div>
                    <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                    <div id="content">
                        <div id="corps_forum">
    <?php
    //Dans un premier temps, on v�rifie s'il y a des forums � lister
    if (mysql_num_rows($requete2) < 1) {
        echo'Il n y a pas de forum :o 
                            Allez en ajouter avec le panneau d administration';
    } else {
        ?>
                                <table style="border-collapse:collapse;" class="liste_cat">
                                    <thead>
                                        <tr style="background-image:url(images/bg_forum_cat.png);background-repeat:repeat-x;height:30px;color:#FFFFFF;">
                                            <th class="cats_colonne_flag"></th>
                                            <th class="centre_cat">Cat&eacute;gories</th>
                                            <th class="centre_cat">Sujets</th>
                                            <th class="centre_cat">R&eacute;ponses</th>
                                            <th class="centre_cat">Dernier message</th>
                                        </tr>
                                    </thead>

        <?php
        //D�but de la boucle
        while ($data2 = mysql_fetch_assoc($requete2)) {
            //On affiche chaque cat�gorie
            if ($categorie != $data2['cat_id']) {
                //Si c'est une nouvelle cat�gorie on l'affiche

                $categorie = $data2['cat_id'];
                ?>
                                            <tr style="background-image:url(images/bg_grosse_cat.png);background-repeat:repeat-x;height:30px;color:#FFFFFF;">
                                                <th></th>
                                                <th class="titre" style="color:#1877D5;font-size:1.1em;">
                                                    <strong>
                                            <?php echo stripslashes(htmlspecialchars($data2['cat_nom'])); ?>
                                                    </strong>
                                                </th>             
                                                <th class="centre_cat"><strong>Sujets</strong></th>       
                                                <th class="centre_cat"><strong>Messages</strong></th>       
                                                <th class="centre_cat"><strong></strong></th>   
                                            </tr>
                <?php
            }

            //Ici, on met le contenu de chaque cat�gorie
            ?>

            <?php
            // Ce super echo de la mort affiche tous
            // les forums en d�tail : description, nombre de r�ponses etc...

            echo'<tr class="sous_cat"><td><img src="./images/message.png" alt="message" /></td>
                             <td><strong>
                             <a href="./voirforum.php?f=' . $data2['forum_id'] . '" class="nom_forum">
                             ' . stripslashes(htmlspecialchars($data2['forum_name'])) . '</a></strong>
                             <br /><span class="fontsize_08">' . nl2br(stripslashes(htmlspecialchars($data2['forum_desc']))) . '</span></td>
                             <td class="centre">' . $data2['forum_topic'] . '</td>
                             <td class="centre">' . $data2['forum_post'] . '</td>';

            // Deux cas possibles :
            // Soit il y a un nouveau message, soit le forum est vide
            if (!empty($data2['forum_post'])) {
                //Selection dernier message
                $nombreDeMessagesParPage = 15;
                $nbr_post = $data2['topic_post'] + 1;
                $page = ceil($nbr_post / $nombreDeMessagesParPage);

                echo'<td class="dernier_msg">A 
                             ' . date('H\hi \l\e d/M/Y', $data2['post_time']) . '<br />
                             Par <a href="./voirprofil.php?m=' . $data2['membre_id'] . '&amp;action=consulter">' . $data2['membre_pseudo'] . '  </a>
                                   </td></tr>';
            } else {
                echo'<td class="dernier_msg">Pas de message</td></tr>';
            }

            //Cette variable stock le nombre de message, on la met � jour
            $totaldesmessages += $data2['forum_post'];

            //On ferme notre boucle et nos balises
        } //fin de la boucle
        echo '</table>';
    } //fin du else
    ?>

                        </div>
                    </div> 
                </div>

                            <?php } ?>


                            <?php if (isset($_SESSION['login']) && $_SESSION['role'] == "administrateur") { ?>
                <div id="menuDroite">
                    <div class="title">Espace membre</div>
                    <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                    <div class="contentDroite">

    <?php if ($_SESSION['role'] == "administrateur") { ?>
                            <!-- Cas ou l'utilisateur est admin-->
                            <table style="width:100%;">
                                <tr>
                                    <td style="padding-left:15px;"><img src="images/icons/cc-kuser-32x32.gif" alt="user"/></td>
                                    <td style="text-align:left;width:90%;"><?php echo $_SESSION['prenom'];
        echo " (" . $_SESSION['role'] . ")" ?></td>
                                </tr>
                                <tr>
                                    <td style="text-align:left;width:50%;padding-left:10px;" colspan="2"><a href="admin/index.php"><img src="images/icons/cc-yast_sysadmin-32x32.gif" alt="admin"/></a><a href="action/deconnexionAction.php" style="text-decoration:none;color:#003322;"><img src="images/icons/ti-system-log-out-32x32.gif" title="Se d&eacute;connecter" alt="Se d&eacute;connecter"/></a></td>
                                </tr>
                            </table>
    <?php } else { ?>
                            <!-- Cas ou l'utilisateur est utilisateur-->
                            <table style="width:100%;">
                                <tr>
                                    <td style="padding-left:15px;"><img src="images/icons/cc-kuser-32x32.gif" alt="user"/></td>
                                    <td style="text-align:left;width:90%;"><?php echo $_SESSION['prenom'];
        echo " (" . $_SESSION['role'] . ")" ?></td>
                                </tr>
                                <tr>
                                    <td style="text-align:left;width:50%;padding-left:10px;" colspan="2"><a href="modifierProfil.php?id=<?php echo $idMembre; ?>" style="text-decoration:none;color:#003322;"><img src="images/icons/kate-32x32.png" title="Modifier son profil" alt="Modifier son profil"/></a><a href="action/deconnexionForumAction.php" style="text-decoration:none;color:#003322;"><img src="images/icons/ti-system-log-out-32x32.gif" title="Se d&eacute;connecter" alt="Se d&eacute;connecter"/></a></td>
                                </tr>
                            </table>

                            <?php }
                        ?>
                    </div>
                    <div class="title">Qui est en ligne?</div>
                    <hr style="margin-left:15px;margin-right:10px;" size="1" />
                    <div class="contentDroite">
                        <table style="width:100%;">
                            <tr>
                                <td style="text-align:left;width:30%;padding-left:15px;" colspan="2"><?php echo 'Le total des messages du forum est <strong>' . $totaldesmessages . '</strong>' ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left;width:30%;padding-left:15px;" colspan="2"><?php echo 'Le site et le forum comptent <strong>' . $TotalDesMembres . '</strong> membres' ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left;width:30%;padding-left:15px;" colspan="2"><?php echo 'Le dernier membre est <a href="./voirprofil.php?m=' . $data4['membre_id'] . '&amp;action=consulter">' . $derniermembre . '</a>' ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left;width:30%;padding-left:15px;" colspan="2"><?php echo $messageUser; ?></td>
                            </tr>                     
                        </table>
                    </div>
                </div>     
<?php } ?>

        </div>
<?php include 'footer.php'; ?>
    </body>
</html>

