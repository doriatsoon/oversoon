<?php

session_name('admin');
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
$idFilm = $_SESSION['id'];
$dateSaisie = date("dmY");

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
			$sql = "update film set titre = \"$titre\" ,categorie = \"$categorie\", duree=\"$duree\", acteur=\"$acteur\",acteur2=\"$acteur2\",acteur3=\"$acteur3\",annee=\"$annee\",realisateur=\"$realisateur\",resume=\"$resume\", datesaisie = \"$dateSaisie\" where id=\"$id\" ";
            $query = mysql_query($sql) or die ("Mise a jour impossible");
            rebuild_rss();
			
			header('location:../ficheFilm.php?id='.$idFilm);
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
    print_r($_FILES['monfichier']);
    echo "dans le cul!!";
}
?>
