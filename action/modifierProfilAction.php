<?php 
session_name('admin');
@session_start();
include("../function.php");

$id = $_SESSION['id'];
$name = $_POST['nom'];
$surname = $_POST['prenom'];
$pseudo = $_POST['login'];
$genre = $_POST['gender'];
$birthday = $_POST['day']."/".$_POST['month']."/".$_POST['year'];
$email = $_POST['mail'];
$signature = $_POST['signature'];
$avatar = $_POST['avatar'];

connexion();

$sqlUpdate = "update membres set nom = \"$name\", prenom=\"$surname\", genre=\"$genre\",birthday =\"$birthday\",login = \"$pseudo\",email=\"$email\" where id=\"$id\" ";
$query = mysql_query($sqlUpdate) or die ("Mise a jour impossible");

$sqlUpdateForum = "update forum_membres set membre_signature = \"$signature\", membre_avatar = \"$avatar\" where membre_id = \"$id\"";
$query = mysql_query($sqlUpdateForum) or die ("Mise a jour impossible");

deconnexion();


echo "<p style=\"color:green;font-weight:bold;font-size:12px;\">Votre modification a bien &eacute;t&eacute;e prise en compte.</p>";
?>
