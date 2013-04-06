<?php
//import des librairies
include 'function.php';

//on démarre la session
session_name('admin');
@session_start();

//s'il y a un message pour l'utilisateur on l'affiche
if (isset($_SESSION['messageUser'])) {
    $messageUser = $_SESSION['messageUser'];
    unset($_SESSION['messageUser']);
} else {
    $messageUser = "";
}

//on récupère la liste des mises à jour
connexion();
$sql = "select date,heure,contenu from news order by id desc";
$query = mysql_query($sql) or die("SQL ERROR: TABLE NEWS");

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

            <div id="centre">
                <div class="title">Plan du site oversoon.free.fr</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div id="content">                                                    
                    <p class="maj_titre"><a href="index.php" class="lienPagination">Accueil</a></p>
                    <p class="maj">L'accueil contient toutes les mises &agrave; jour du site.</p>  
                    <p class="maj_titre"><a href="videos.php" class="lienPagination">Vid&eacute;oth&egrave;que</a></p>
                    <p class="maj">L'onglet "Vid&eacute;oth&egrave;que" est en fait un annuaire classant les films que je poss&egrave;de. Vous trouverez &eacute;galement une fiche d&eacute;taillant chaque film.</p>  
                    <p class="maj_titre"><a href="liens.php" class="lienPagination">Liens</a></p>
                    <p class="maj">L'onglet "Liens" propose une s&eacute;rie de lien pointant vers d'autres sites en rapport avec oversoon.free.fr</p>  
                    <p class="maj_titre"><a href="contactezMoi.php" class="lienPagination">Contactez-moi</a></p>    
                    <p class="maj">Si vous avez des suggestions, des id&eacute;es, ou des remarques &agrave; faire sur ce site, n'h&eacute;sitez pas &agrave; me contacter.</p>  
                    <p class="maj_titre"><a href="forum.php" class="lienPagination">Forum</a></p>    
                    <p class="maj">Exprimez-vous ou donnez votre avis sur diff�rents films sur le forum.</p>                           
                </div>
            </div>

        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>
