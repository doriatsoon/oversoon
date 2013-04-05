<?php

//on récupère les informations du formulaire
$login = $_POST['login'];
$email = $_POST['mail'];
$titre = $_POST['titre'];
$message = str_replace('\\','',$_POST['message']);

//préparation du mail
$headers ='From: "Contactez-moi"<'.$email.'>'."\n";
$headers .='Reply-To: '.$email."\n";
$headers .='Content-Type: text/html; charset="UTF8_FR"'."\n";
$headers .='Content-Transfer-Encoding: 8bit';

$messageHTML ='<html><head><title>Contactez moi</title></head><body>'.$message.'</body></html>';

if(mail('oversoon@free.fr', 'Oversoon.fr', $messageHTML, $headers))
{
    $_SESSION['messageUser'] = '<p style=\"color:green;font-weight:bold;font-size:12px;\">Le message a &eacute;t&eacute; envoy&eacute;</p>';
	header('location:../contactezMoi.php');
}
else
{
    $_SESSION['messageUser'] =  '<p style=\"color:red;font-weight:bold;font-size:12px;\">Le message n\'a pu &ecirc;tre envoy&eacute;</p>';
	header('location:../contactezMoi.php');
}
?> 