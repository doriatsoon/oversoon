<?php

@session_start();
include("../../function.php");
include("flux_rss.php");
$titre = str_replace("\\","",$_POST['titre']);
$categorie = $_POST['genre'];
$duree = $_POST['duree'];
$acteur = $_POST['acteur'];
$acteur2 = $_POST['acteur2'];
$acteur3 = $_POST['acteur3'];
$annee = $_POST['annee'];
$realisateur = $_POST['real'];
$resume = htmlentities($_POST['resume'],ENT_QUOTES);
$dateSaisie = date("dmY");
//on génère l'id du film
$id = rand(1,10000);

if (isset($_FILES['monfichier']) && $_FILES['monfichier']['error'] == 0)
{
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['monfichier']['size'] <= 1000000)
    {
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['monfichier']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
		$namefile = str_replace("\\","",$_FILES['monfichier']['name']);
        if (in_array($extension_upload, $extensions_autorisees))
        {
            // On peut valider le fichier et le stocker définitivement:
            move_uploaded_file($_FILES['monfichier']['tmp_name'], '../images/img_film/'.$id.'.jpg');

            //on copie l'image dans la partie utilisateur
            copy('../images/img_film/'.$id.'.jpg','../../images/img_film/'.$id.'.jpg');

            connexion();
            $sql = "insert into film (id,titre,categorie,duree,acteur,acteur2,acteur3,annee,realisateur,resume,datesaisie) values (\"$id\",\"$titre\",\"$categorie\",\"$duree\",\"$acteur\",\"$acteur2\",\"$acteur3\",\"$annee\",\"$realisateur\",\"$resume\",\"$dateSaisie\") ";            
            mysql_query($sql) or die (mysql_error());
            rebuild_rss();

            header('location:../videos.php');
        }
        else{
            echo "l'extension n'est pas autorisée";
        }
    }
    else {
        echo "le fichier est trop gros";
    }
}
else {
    
    echo "Veuillez s&eacute;lectionner une image.";
}
?>
