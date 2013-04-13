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
?>

<!-- Si l'utilisateur est pas connect+� -->
<?php if (!isset($_SESSION['login'])) { ?>
    <div class="title">Forum</div>
    <hr style="margin-left:15px;margin-right:10px;margin-bottom:50px;" size="1"/>
    <?php include './forbiddenAcces.php';?>
<?php } else {
    ?>

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

<?php
}
deconnexion();
?>