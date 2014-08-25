<?php

session_name('admin');
@session_start();

include('../function.php');
connexion();

//on récupère les informations du formulaire
$login = $_POST['login'];
$mail = $_POST['mail'];

//on récupère l'id de l'utilisateur
$sql = "select id,prenom from membres where login = \"$login\" and email = \"$mail\"";
$query = mysql_query($sql) or die("ERREUR SQL");
$row = mysql_fetch_assoc($query);
$numRow = mysql_num_rows($query);

if ($numRow == 0) {
    $_SESSION['messageUser'] = '<p style="font-weight:bold;color:red;font-size:12px;">Vous n\'&ecirc;tes pas membres.</p>';
    header('location:../#mdpforget');
} else {

    $idUpdate = $row['id'];

    //on génère un nouveau mot de passe
    $chaine = "abBDEFcdefghijkmnPQRSTUVWXYpqrst23456789";
    srand((double) microtime() * 1000000);

    //mot de passe de 8 caractères 
    for ($i = 0; $i < 8; $i++) {
        $pass .= $chaine[rand() % strlen($chaine)];
    }

    //on crypte le mot de passe
    $passCrypte = sha1($pass);

    //on met à jour le mot de passe
    $sqlUpdate = "update membres set pass = \"$passCrypte\" where id = \"$idUpdate\"";
    $queryUpdate = mysql_query($sqlUpdate) or die("Probleme dans la mise a jour.");


    //on envoie un mail à l'utilisateur
    //préparation du mail
    $headers = 'From: "Administrateur"<oversoon@free.fr>' . "\n";
    $headers .='Reply-To: oversoon@free.fr' . "\n";
    $headers .='Content-Type: text/html; charset="UTF8_FR' . "\n";
    $headers .='Content-Transfer-Encoding: 8bit';


    $message = "Bonjour " . $row['prenom'] . ",<br> Votre adresse est :" . $mail . "<br>Votre pseudo est: " . $login . "<br>Votre nouveau mot de passe est: " . $pass . "<br><br><br>A bientot sur <a href=\"http://oversoon.free.fr\">oversoon.free.fr<a>";
    $message = str_replace('\\', '', $message);


    $messageHTML = '<html><head><title>Votre nouveau mot de passe</title></head><body>' . $message . '</body></html>';

    if (mail($mail, 'Nouveau mot de passe', $messageHTML, $headers)) {
        $_SESSION['messageUser'] = '<p style="color:green;font-weight:bold;font-size:12px;">Votre nouveau mot de passe a &eacute;t&eacute; envoy&eacute;</p>';
        header('location:../#mdpforget');
    } else {
        $_SESSION['messageUser'] = '<p style="color:red;font-weight:bold;font-size:12px;">Une erreur est survenue pendant l\'envoi du message.</p>';
        header('location:../#mdpforget');
    }
}
?>