<?php

//on démarre la session
session_name('admin');
@session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8">
        <title>Oversoon.fr</title>
        <?php include 'cssFile.php'; ?>
        <?php include 'javascriptFile.php'; ?>
        <link rel="alternate" type="application/rss+xml" title="Flux RSS" href="http://oversoon.free.fr/rss/news_FR_flux.xml" />
    </head>

    <body>
        <div id="page">
            <?php include 'bandeau.php'; ?>
            <?php include 'menu.php'; ?>
            <div class="loading"></div>
            <div id="center">
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>
