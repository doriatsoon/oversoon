<?php
//configuration de la session
session_name('admin');
@session_start();
include '../../connexion/bdd.php';

//on se connecte à la base de données
connexion();

//on récupère les variables du formulaire
$login = $_POST['login'];
$password = $_POST['pass'];

//on crypte le mot de passe et le compare à celui stocké dans la base de données
$password = sha1($password);

$sql = "select pass,prenom,role,activation from membres where login = \"$login\" ";
$query = mysql_query($sql) or die ("REQUETE NON EFFECTUEE");
$row = mysql_fetch_assoc($query);

//on test le mot de passe
if($row['pass'] == $password){
    //on test le compte a été activé
    if($row['activation'] == 0){
        $_SESSION['messageUser'] = "<p style=\"color:red;font-weight:bold;font-size:12px;\">Votre compte n'a pas encore &eacute;t&eacute; activ&eacute;.</p>";
    }else{
        $_SESSION['messageUser'] = "<p style=\"color:green;font-weight:bold;font-size:12px;\">Vous &ecirc;tes connect&eacute;.</p>";
        $_SESSION['login'] = $login;
        $_SESSION['prenom'] = $row['prenom'];
        $_SESSION['role'] = $row['role'];
    }
    header('location:../news.php');
}else{
    $_SESSION['messageUser'] = "<p style=\"color:red;font-weight:bold;font-size:12px;\">Erreur de mot de passe.</p>";
    header('location:../news.php');
}

?>
