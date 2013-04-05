<?php
session_name('admin');
@session_start();
include("../../function.php");


$name = $_POST['nom'];
$surname = $_POST['prenom'];
$pseudo = $_POST['login'];
$genre = $_POST['gender'];
$birthday = $_POST['day']."/".$_POST['month']."/".$_POST['year'];
$email = $_POST['mail'];
$roleupdate = $_POST['role'];
$etat = $_POST['etat'];

connexion();
//on va chercher les informations concernant le film
$sql = "select id from membres where login = \"$pseudo\"";
$query = mysql_query($sql);
$row = mysql_fetch_assoc($query);
$idupdate = $row['id'];


$sqlUpdate = "update membres set nom = \"$name\", prenom=\"$surname\", genre=\"$genre\",birthday =\"$birthday\",login = \"$pseudo\",email=\"$email\",role=\"$roleupdate\",activation=\"$etat\" where id=\"$idupdate\" ";


//préparation du mail
$headers ='From: "Administrateur"<oversoon@free.fr>'."\n";
$headers .='Reply-To: no-reply'."\n";
$headers .='Content-Type: text/html; charset="UTF8_FR"'."\n";
$headers .='Content-Transfer-Encoding: 8bit';

$message = "Bonjour ".$surname.",<br>Votre compte a &eacute;t&eacute; activ&eacute;.<br>Vous pouvez d&eacute;sormais vous connecter sur <a href=\"http://oversoon.free.fr\">Oversoon.fr</a><br>A bient&ocirc;t.";
$messageHTML ='<html><head><title>Administrateur</title></head><body>'.$message.'</body></html>';

if(mail($email, 'Activation du compte', $messageHTML, $headers))
{
    $query = mysql_query($sqlUpdate) or die ("Mise a jour impossible");
    $_SESSION['messageUser'] = '<p style=\"color:green;font-weight:bold;font-size:12px;\">Le message a &eacute;t&eacute; envoy&eacute;</p>';
	header('location:../membres.php');
}
else
{
    $_SESSION['messageUser'] =  '<p style=\"color:red;font-weight:bold;font-size:12px;\">Le message n\'a pu &ecirc;tre envoy&eacute;</p>';
	header('location:../membres.php');
}

header('location:../membres.php');

?>
