<?php 

session_name('admin');
@session_start();

include('../function.php');
connexion();

//login du user connecté----------------------------
$userConnected = $_SESSION['login'];

//on récupère les info du destinataire-------------
$loginDestinataire = $_POST['loginDestinataire'];
$nomDestinataire = $_POST['nomDestinataire'];
$prenomDestinataire = $_POST['prenomDestinataire'];

//récupération du message-------------------------
$contenu = $_POST['message'];

//récupération de l'adresse email-----------------
$mail = $_POST['email'];

//récupération du parametre de retour-------------
$parametreUrlRetour = $_POST['parametreUrlRetour'];

//on envoie un mail Ã  l'utilisateur
//prÃ©paration du mail
$headers ='From: "Membre forum"<oversoon@free.fr>'."\n";
$headers .='Reply-To: no-reply'."\n";
$headers .='Content-Type: text/html; charset="UTF8_FR'."\n";
$headers .='Content-Transfer-Encoding: 8bit';
	
	
$message = "Bonjour ".$prenomDestinataire.",<br>".$userConnected." vous envoie le message suivant :<br><br>".$contenu."<br><br><br>A bientot sur <a href=\"http://oversoon.free.fr\">oversoon.free.fr<a>";
$message = str_replace('\\','',$message);
    
    
$messageHTML ='<html><head><title>Message de '.$userConnected.'</title></head><body>'.$message.'</body></html>';
	
if(mail($mail, 'Message', $messageHTML, $headers))
{
	$_SESSION['messageUser'] = '<p style="color:green;font-weight:bold;font-size:12px;">Votre message a &eacute;t&eacute; envoy&eacute;</p>';
	header('location:../voirprofil.php?m='.$parametreUrlRetour);
}
else
{
	$_SESSION['messageUser'] =  '<p style="color:red;font-weight:bold;font-size:12px;">Une erreur est survenue pendant l\'envoi du message.</p>';
	header('location:../voirprofil.php?m='.$parametreUrlRetour);
}

?>