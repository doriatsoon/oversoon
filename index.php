<?php
//import des librairies
include 'function.php';

//on démarre la session
session_name('admin');
@session_start();

//on récupère la liste des news-------------------------------------
connexion();
$limite = "5";
$sql = "select date,heure,contenu from news order by id desc limit " . $limite . "";
$query = mysql_query($sql) or die("SQL ERROR: TABLE NEWS");

deconnexion();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Oversoon.fr</title>
        <?php include 'cssFile.php'; ?>
        <?php include 'javascriptFile.php'; ?>
        <link rel="alternate" type="application/rss+xml" title="Flux RSS" href="http://oversoon.free.fr/rss/news_FR_flux.xml" />
    </head>

    <body>
        <div id="page">
            <?php include 'bandeau.php'; ?>
            <?php include 'menu.php'; ?>
            <div id="centre">
                <div class="title">Accueil</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="content">
                    <?php while ($row = mysql_fetch_assoc($query)) { ?>
                        <p class="maj_titre">Mise &agrave; jour du <?php echo $row['date']; ?> &agrave; <?php echo $row['heure'] ?></p>
                        <p class="maj"><?php echo $row['contenu']; ?></p>
                    <?php } ?>
                </div>                
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>
