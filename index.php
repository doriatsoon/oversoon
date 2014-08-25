<?php
//on démarre la session
session_name('admin');
@session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Mon site</title>
        <?php include 'cssFile.php'; ?>
        <?php include 'javascriptFile.php'; ?>
        <link rel="alternate" type="application/rss+xml" title="Flux RSS" href="http://oversoon.free.fr/rss/news_FR_flux.xml" />
    </head>

    <body>
        <?php include 'menu.php'; ?>
        <?php include 'center.php'; ?>
        <?php include 'footer.php'; ?>
        <?php include './popin/login.php'; ?>
    </body>
</html>
