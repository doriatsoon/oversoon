<?php
//Cette fonction doit être appelée avant tout code html
session_name('admin');
@session_start();

//On donne ensuite un titre à la page, puis on appelle notre fichier debut.php
$titre = "Poster";

//Maintenant, on se connecte à la base de données
include("../function.php");
connexion();
//On récupère la valeur de la variable action
$action = htmlspecialchars($_GET['action']);

$idCreateurForum = 0;
//on va récupérer l'id du posteur dans forum membre
$pseudo = $_SESSION['login'];
$sql =  "select membre_id from forum_membres where membre_pseudo = '".$pseudo."'";
$query = mysql_query($sql) or die ("ERROR SQL");
$row = mysql_fetch_assoc($query);

// Si le membre n'est pas connecté, il est arivé ici par erreur
if (!isset($_SESSION['login']))
{
    //echo'<p>Erreur : Vous n êtes plus connecté</p>';
}
else //Sinon on lance la suite
{
    switch($action)
    {
        //Premier cas : nouveau topic
        case "nouveautopic":
            //On passe le message dans une série de fonction
            $message = mysql_real_escape_string($_POST['message']);
            $mess = mysql_real_escape_string($_POST['mess']);

            //Pareil pour le titre
            $titre = mysql_real_escape_string($_POST['titre']);

            //ici seulement, maintenant qu'on est sur qu'elle existe, on récupère la valeur de la variable f
            $forum = (int) $_GET['f'];
            $temps = time();

            if (empty($message) || empty($titre))
            {
                //echo'<p>Votre message ou votre titre est vide, cliquez <a href="./poster.php?action=nouveautopic&amp;f='.$forum.'">ici</a> pour recommencer</p>';
            }
            else //Si jamais le message n'est pas vide
            {
                //On entre le topic dans la base de donnée en laissant
                //le champ topic_last_post à 0
                mysql_query("INSERT INTO forum_topic
(forum_id, topic_titre, topic_createur, topic_vu, topic_time, topic_genre, topic_last_post, topic_post)
VALUES('".$forum."', '".$titre."', '".$message."', '1', '".$temps."','".$mess."', '0', '0'  )")
                or die ("Un problème est survenu lors de l'envoi du message");

                $nouveautopic = mysql_insert_id();

                //Puis on entre le message
                mysql_query("INSERT INTO forum_post
(post_id, post_createur, post_texte, post_time, topic_id, post_forum_id)
VALUES(',' ,'".$row['membre_id']."', '".$message."', '".$temps."', '".$nouveautopic."', '".$forum."')")
                or die ("Un problème est survenu lors de l'envoi du message");

                $nouveaupost = mysql_insert_id();

                //Ici on update comme prévu la valeur de topic_last_post et de topic_first_post
                mysql_query("UPDATE forum_topic
SET topic_last_post = '".$nouveaupost."',
topic_first_post = '".$nouveaupost."'
WHERE topic_id = '".$nouveautopic."'")
                or die ("Un problème est survenu lors de l'envoi du message");


                //Enfin on met à jour les tables forum_forum et forum_membres
                mysql_query("UPDATE forum_forum
SET forum_post = forum_post + 1 ,
forum_topic = forum_topic + 1,
forum_last_post_id = '".$nouveaupost."'
WHERE forum_id = '".$forum."'")
                or die ("Un problème est survenu lors de l'envoi du message");

                mysql_query("UPDATE forum_membres
SET membre_post = membre_post + 1
WHERE membre_id = '".$row['membre_id']."'")
                or die ("Un problème est survenu lors de l'envoi du message");

                //Et un petit message
                //echo'<p>Votre message a bien été ajouté!<br /><br />Cliquez <a href="./index.php">ici</a> pour revenir à l index du forum<br />Cliquez <a href="./voirtopic.php?t='.$nouveautopic.'">ici</a> pour le voir</p>';
            }
            break; //Houra !
            //Deuxième cas : répondre
            case "repondre":
                //On passe le message dans une série de fonction
                $message = mysql_real_escape_string($_POST['message']);



                //ici seulement, maintenant qu'on est sur qu'elle existe, on récupère la valeur de la variable t
                $topic = (int) $_GET['t'];
                $temps = time();

                if (empty($message))
                {
                    //echo'<p>Votre message est vide, cliquez <a href="./poster.php?action=repondre&amp;t='.$topic.'">ici</a> pour recommencer</p>';
                }
                else //Sinon, si le message n'est pas vide
                {

                    //On récupère l'id du forum
                    $requete2 = mysql_query('SELECT forum_id, topic_post
FROM forum_topic
WHERE topic_id = "'.$topic.'"');

                    $data2= mysql_fetch_assoc($requete2) or die ("Une erreur semble être survenue lors de l'envoi du message");
                    $forum = $data2['forum_id'];

                    //Puis on entre le message
                    mysql_query("INSERT INTO forum_post
(post_id, post_createur, post_texte, post_time, topic_id, post_forum_id)
VALUES(',' ,'".$row['membre_id']."', '".$message."', '".$temps."', '".$topic."', '".$forum."')")
                    or die ("Une erreur semble avoir survenu lors de l'envoi du message");

                    $nouveaupost = mysql_insert_id();

                    //On change un peu la table forum_topic
                    mysql_query("UPDATE forum_topic
SET topic_post = topic_post + 1,
topic_last_post = '".$nouveaupost."'
WHERE topic_id ='".$topic."'")
                    or die ("Une erreur semble avoir survenu lors de l'envoi du message");

                    //Puis même combat sur les 2 autres tables
                    mysql_query("UPDATE forum_forum
SET forum_post = forum_post + 1 ,
forum_last_post_id = '".$nouveaupost."'
WHERE forum_id = '".$forum."'")
                    or die ("Une erreur semble avoir survenu lors de l'envoi du message");

                    mysql_query("UPDATE forum_membres
SET membre_post = membre_post + 1
WHERE membre_id = '".$row['membre_id']."'")
                    or die ("Une erreur semble avoir survenu lors de l'envoi du message");

                    //Et un petit message
                    $nombreDeMessagesParPage = 15;
                    $nbr_post = $data2['topic_post']+1;
                    $page = ceil($nbr_post / $nombreDeMessagesParPage);
                    //echo'<p>Votre message a bien été ajouté!<br /><br />
                    //Cliquez <a href="./index.php">ici</a> pour revenir à l index du forum<br />
                    //Cliquez <a href="./voirtopic.php?t='.$topic.'&amp;page='.$page.'#p_'.$nouveaupost.'">ici</a> pour le voir</p>';
                }
                break;

                case "edit": //Si on veut éditer le post
                    //On récupère la valeur de p
                    $post = (int) $_GET['p'];

                    //On check le message
                    $message = mysql_real_escape_string($_POST['message']);


                    //Ensuite on vérifie que le membre a le droit d'être ici (soit le créateur soit un modo/admin)
                    $requete2 = mysql_query('
SELECT post_createur, post_texte, post_time, topic_id, auth_modo
FROM forum_post
LEFT JOIN forum_forum ON forum_post.post_forum_id = forum_forum.forum_id
WHERE post_id='.$post.'');
                    $data2 = mysql_fetch_assoc($requete2);
                    $topic = $data2['topic_id'];

                    //On récupère la place du message dans le topic (pour le lien)
                    $requete3 = mysql_query('SELECT COUNT(*) AS nbr FROM forum_post
WHERE topic_id = '.$topic.' AND post_time < '.$data2['post_time']);
                    $data3 = mysql_fetch_assoc($requete3);

                    if (!$_SESSION['login'])
                    {
                        // Si cette condition n'est pas remplie ça va barder :o
                        echo'<p>Vous n\'avez aucun droit d\'être ici</p></div></body></html>';
                        exit();
                    }
                    else //Sinon ça roule et on continue
                    {
                        mysql_query("UPDATE forum_post SET post_texte =  '".$message."' WHERE post_id = '".$post."'");
                        $nombreDeMessagesParPage = 15;
                        $nbr_post = $data3['nbr']+1;
                        $page = ceil($nbr_post / $nombreDeMessagesParPage);
                        
                    }
                    break;

                
/*********************delete***********************************/


                    case "delete": //Si on veut supprimer le post
                        //On récupère la valeur de p
                        $post = (int) $_GET['p'];
                        $requete1 = mysql_query('
        SELECT post_createur, post_texte, forum_id, topic_id, auth_modo
        FROM forum_post
        LEFT JOIN forum_forum ON forum_post.post_forum_id = forum_forum.forum_id
        WHERE post_id='.$post.'');
                        $data1 = mysql_fetch_assoc($requete1);
                        $topic = $data1['topic_id'];
                        $forum = $data1['forum_id'];

                        //Ensuite on vérifie que le membre a le droit d'être ici
                        //(soit le créateur soit un modo/admin)
                        if (!$_SESSION['login'])
                        {
                            // Si cette condition n'est pas remplie ça va barder :o
                            echo'<p>Vous n\'avez aucun droit d\'être ici</p></div></body></html>';
                            exit();
                        }
                        else //Sinon ça roule et on continue
                        {
                            //Ici on vérifie plusieurs choses :
                            //est-ce un premier post ? Dernier post ou post classique ?

                            $requete_first_post = mysql_query("SELECT COUNT(*)
                AS first_post
                FROM forum_topic
                WHERE topic_first_post = $post");

                            $requete_last_post = mysql_query("SELECT COUNT(*)
                AS last_post
                FROM forum_topic
                WHERE topic_last_post = $post");

                            $first_post = mysql_fetch_assoc($requete_first_post);
                            $last_post = mysql_fetch_assoc($requete_last_post);


                            //On distingue maintenant les cas
                            if ($first_post['first_post'] != 0)
                            //Si le message est le premier
                            {

                                //Les autorisations ont changé !
                                if (!$_SESSION['login'])
                                {
                                    echo'<p>
                                Vous n\'avez aucun droit d\'être ici</p></div></body></html>';
                                    exit();
                                }
                                //Il faut s'assurer que ce n'est pas une erreur

                        /*echo'<p>Vous avez choisi de supprimer un post.
                        Cependant ce post est le premier du topic.
                        Voulez vous supprimer le topic ? <br />
             <a href="./postok.php?action=delete_topic&amp;t='.$topic.'">oui</a>
                        - <a href="./voirtopic.php?t='.$topic.'">non</a></p>';*/


                            }

                            elseif ($last_post['last_post'] != 0)
                            //Si le message est le dernier

                            {

                                //On supprime le post
                                mysql_query("DELETE FROM forum_post
                        WHERE post_id = '".$post."'");

                                //On modifie la valeur de topic_last_post pour cela on
                                //récupère l'id du plus récent  message de ce topic
                                $requete4 = mysql_query('SELECT post_id
                        FROM forum_post
                        WHERE topic_id = '.$topic.'
                        ORDER BY post_id DESC
                        LIMIT 0,1');
                                $data4 = mysql_fetch_assoc($requete4);

                                //On fait de même pour forum_last_post_id
                                $requete5 = mysql_query('SELECT post_id FROM forum_post
                        WHERE post_forum_id = '.$forum.'
                        ORDER BY post_id DESC
                        LIMIT 0,1');
                                $data5 = mysql_fetch_assoc($requete5);

                                //On met à jour la valeur de topic_last_post
                                mysql_query('UPDATE forum_topic
                        SET topic_last_post = '.$data4['post_id'].' WHERE topic_last_post = '.$post.'');

                                //On enlève 1 au nombre de messages du forum et on met à
                                //jour forum_last_post
                                mysql_query("UPDATE forum_forum SET forum_post = forum_post - 1,
                        forum_last_post_id = ".$data5['post_id']."
                        WHERE forum_id = $forum");

                                //On enlève 1 au nombre de messages du topic
                                mysql_query("UPDATE forum_topic
                        SET  topic_post = topic_post - 1
                        WHERE topic_id = $topic");

                                //On enlève 1 au nombre de messages du membre
                                mysql_query("UPDATE forum_membres
                        SET  membre_post = membre_post - 1
                        WHERE membre_id = ".$data1['post_createur']."");

                                //Enfin le message


                            }

                            elseif ($last_post['last_post'] == 0
                                && $first_post['first_post'] == 0) // Si c'est un post classique

                            {

                                //On supprime le post
                                mysql_query("DELETE FROM forum_post
                        WHERE post_id = $post");

                                //On enlève 1 au nombre de messages du forum
                                mysql_query("UPDATE forum_forum
                        SET  forum_post = forum_post - 1
                        WHERE forum_id ='".$forum."'");

                                //On enlève 1 au nombre de messages du topic
                                mysql_query("UPDATE forum_topic
                        SET  topic_post = topic_post - 1
                        WHERE topic_id = $topic");

                                //On enlève 1 au nombre de messages du membre
                                mysql_query("UPDATE forum_membres
                        SET  membre_post = membre_post - 1
                        WHERE membre_id = ".$data1['post_createur']."");
                            }

                        }
                        break;
                        default:
                            echo'<p>Cette action est impossible</p>';
                        } //Fin du Switch
                    } //Fin du else, le membre est connecté

                    $topic = $_SESSION['t'];
                    $forum = $_SESSION['f'];
                   switch($action)
                    {
                        //Premier cas : nouveau topic
                        case "nouveautopic":
                            header('location:../voirforum.php?f='.$forum.'');
                            break;

                            case "repondre":
                                header('location:../voirtopic.php?t='.$topic.'');
                                break;

                                case "delete":
                                    header('location:../voirtopic.php?t='.$topic.'');
                                    break;
                                    
                                    case "edit":
                                    header('location:../voirtopic.php?t='.$topic.'');
                                    break;
                                }
                                ?>



