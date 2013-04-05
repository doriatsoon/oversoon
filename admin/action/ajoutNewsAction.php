<?php

//on lance la session
session_name('admin');
@session_start();
include ('../../function.php');

//on récupère les informations du formualaire
$date = $_POST['date'];
$heure = $_POST['heure'];
$maj = $_POST['maj'];


//on traite les informations
$maj = htmlentities($maj,ENT_QUOTES);

connexion();


//on récupère l'ancien id
$requeteId = "select max(id) as id from news";
$queryId = mysql_query($requeteId) or die ("REQUETE IMPOSSIBLE");
$rowId = mysql_fetch_assoc($queryId);

$id = $rowId['id'] + 1;

$requete = "insert into news (id,date,heure,contenu) values (\"$id\",'$date','$heure','$maj')";
$query = mysql_query($requete) or die ("ERROR SQL");

$_SESSION['messageUser'] = "<p style=\"color:green;font-weight:bold;font-size:12px;\">News enregistr&eacute;e.</p>";

header('location:../news.php');

?>
