<?php
//import des librairies
include 'function.php';

//on démarre la session
session_name('admin');
@session_start();

//s'il y a un message pour l'utilisateur on l'affiche-----------------------
if (isset($_SESSION['messageUser'])) {
    $messageUser = $_SESSION['messageUser'];
    unset($_SESSION['messageUser']);
} else {
    $messageUser = "";
}


//on récupère la liste des news-------------------------------------
connexion();
$limite = "5";
$sql = "select date,heure,contenu from news order by id desc limit " . $limite . "";
$query = mysql_query($sql) or die("SQL ERROR: TABLE NEWS");

/* ------------------------------------------------------------------------------------------------- */

//on cacul le nombre de visiteur
if (!isset($_SESSION['login'])) {

    //on récupère l'ip de l'utilisateur
    $ip = $_SERVER['REMOTE_ADDR'];

    //on regarde s'il est déjà visiteur
    $resultUser = mysql_query("SELECT count(IP) as nbrIp FROM connectes where IP = \"$ip\"");
    $donneesUser = mysql_fetch_assoc($resultUser);

    //si le user est déjà visiteur, on update la date
    if ($donneesUser['nbrIp'] == 0) {
        //on insere l'ip du visiteur
        mysql_query('INSERT INTO connectes VALUES(\'' . $ip . '\', ' . time() . ',"visiteur")');
    }

    //si le user est déjà visiteur, on update la date
    else if ($donneesUser['nbrIp'] == 1) {
        //on insere l'ip du visiteur
        mysql_query('UPDATE connectes SET \'timestamp\' = ' . time() . ' where ip = ' . $ip . ' and type_user = \'visiteur\'');
    }

    //suppression des entrées trop anciennes
    $timestamp_5min = time() - (60 * 1); // 60 * 5 = nombre de secondes écoulées en 5 minutes
    mysql_query('DELETE FROM connectes WHERE timestamp < ' . $timestamp_5min) . 'and type_user = "visiteur"';

    $retour = mysql_query('SELECT COUNT(*) AS nbre_visiteurs FROM connectes WHERE type_user = "visiteur"');
    $donnees = mysql_fetch_array($retour);
    $nbrvisiteurs = 'Il y a actuellement <strong>' . $donnees['nbre_visiteurs'] . '</strong> ' . pluriel('visiteur', $donnees['nbre_visiteurs']) . ' sur le site';
    $_SESSION['nbrvisiteurs'] = $nbrvisiteurs;
} else {
    $retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connectes where type_user = "membre"');
    $donnees = mysql_fetch_array($retour);

    $_SESSION['nbrconnectes'] = 'Il y a actuellement <strong>' . $donnees['nbre_entrees'] . '</strong> ' . pluriel('membre', $donnees['nbre_entrees']) . ' ' . pluriel('connect&eacute', $donnees['nbre_entrees']);

    unset($_SESSION['nbrvisiteurs']);
    $nbrvisiteurs = "Il n'a aucun visiteur sur le site";

    //récupération de l'id du membre
    $idMembre = $_SESSION['id'];
}

deconnexion();

/* ------------------------------------------------------------------------------------------------ */

if (isset($_SESSION['nbrconnectes'])) {
    $nbrconnectes = $_SESSION['nbrconnectes'];
} else {
    $nbrconnectes = 0;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Oversoon.fr</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="javascript/jquery-easing.js"></script>
        <script type="text/javascript" src="javascript/script.js"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
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
