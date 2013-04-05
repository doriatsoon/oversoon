<?php

include ('../connexion/bdd.php');
session_name('admin');
@session_start();

//récupération des informations personnelles saisies dans le formulaire-----------
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$sexe = $_POST['gender'];
$birthday = $_POST['day'];
$birthmonth = $_POST['month'];
$birthyear = $_POST['year'];

//récupération des informations du compte saisies dans le formulaire--------------
$login = $_POST['login'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['mail'];

//récupération des informations pour le forum-------------------------------------
$signature = $_POST['signature'];
$avatar = $_POST['avatar'];

//traitement des données----------------------------------------------------------
$nom = strtoupper($nom);
$prenom = strtoupper($prenom);
$dateNaissance = strval($birthday)."/".strval($birthmonth)."/".strval($birthyear);

//on test la confirmation des mots de passe, si c'est ok, on le crypte------------
if($password == $password2) {
    $passwordCrypte = sha1($password);
}

//on récupère la date du jour------------------------------------------------------
$dateInscription = date('d/m/Y');

//on génère l'id de la personne----------------------------------------------------
$id = rand(1,10000);
$role = "utilisateur";
$activation = 0;

//connexion à la base de données----------------------------------------------------
connexion();

//on envoie un mail à l'utilisateur-------------------------------------------------
$headers ='From: "Administrateur"<oversoon@free.fr>'."\n";
$headers .='Reply-To: no-reply'."\n";
$headers .='Content-Type: text/html; charset="UTF8_FR'."\n";
$headers .='Content-Transfer-Encoding: 8bit';

$message = "Bonjour Marc,<br>Un nouveau membre s'est inscrit sur oversoon.free.fr.<br> Veuillez proc&eacute;c&eacute;der &agrave; la validation de son compte.<br> Merci. <br> <a href=\"oversoon.free.fr\">oversoon.free.fr</a>";
$message = str_replace('\\','',$message);

$messageHTML ='<html><head><title>Nouveau membre</title></head><body>'.$message.'</body></html>';

if(mail('doriatsoon@gmail.com', 'Nouveau membre', $messageHTML, $headers)) {
    $sql = "insert into membres (id,nom,prenom,login,pass,birthday,role,activation,email,genre,inscription) values ($id,\"$nom\",\"$prenom\",\"$login\",\"$passwordCrypte\",\"$dateNaissance\",\"$role\",$activation,\"$email\",\"$sexe\",\"$dateInscription\")";
    $query = mysql_query($sql) or die ("SQL ERROR 5445: IMPOSSIBLE D'EFFECTUER LA REQUETE");
    mysql_query("insert into forum_membres (membre_id,membre_pseudo,membre_email,membre_avatar,membre_signature) values($id,\"$login\",\"$email\",\"$avatar\",\"$signature\")") or die ("L'insertion dans la table forum n'a pas été effectuée");
    $_SESSION['messageUser'] = "<p style=\"color:green;font-weight:bold;font-size:12px;text-align:justify;margin-right:10px;\">Votre inscription a bien &eacute;t&eacute; effectu&eacute;e. Vous recevrez un mail lorsque votre compte sera valid&eacute;.</p>";
    header('location:../index.php');
}
else {
    $_SESSION['messageUser'] = "<p style=\"color:red;font-weight:bold;font-size:12px;\">Votre inscription n'a pas &eacute;t&eacute; prise en compte.</p>";
    header('location:../index.php');
}

?>
