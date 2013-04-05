<?php
//configuration de la session
session_name('admin');
@session_start();
include '../connexion/bdd.php';

//on se connecte à la base de données
connexion();

//on récupère les variables du formulaire
$login = $_POST['login'];
$password = $_POST['pass'];

//on crypte le mot de passe et le compare à celui stocké dans la base de données
$password = sha1($password);

$sql = "select id,pass,prenom,role,activation from membres where login = \"$login\" ";
$query = mysql_query($sql) or die ("REQUETE NON EFFECTUEE");
$row = mysql_fetch_assoc($query);

//on test le mot de passe
if($row['pass'] == $password){
    //on test le compte a été activé
    if($row['activation'] == 0){
        $_SESSION['messageUser'] = "<p style=\"color:red;font-weight:bold;font-size:12px;\">Votre compte n'a pas encore &eacute;t&eacute; activ&eacute;.</p>";
    }else{
    
        //on compte le nombre de connecté les 5 dernieres minutes
  
        // ETAPE 1 : on vérifie si l'IP se trouve déjà dans la table
        // Pour faire ça, on n'a qu'à compter le nombre d'entrées dont le champ "ip" est l'adresse ip du visiteur
        $retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connectes WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\' and type_user="membre" ');
        $donnees = mysql_fetch_array($retour);
        
        if ($donnees['nbre_entrees'] == 0) // L'ip ne se trouve pas dans la table, on va l'ajouter
        {
            mysql_query('DELETE FROM connectes WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\' and type_user = "visiteur"');
            mysql_query('INSERT INTO connectes VALUES(\'' . $_SERVER['REMOTE_ADDR'] . '\', ' . time() . ',"membre")');
        }
        else // L'ip se trouve déjà dans la table, on met juste à jour le timestamp
        {
            mysql_query('UPDATE connectes SET timestamp=' . time() . ' WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
        }
        
        // -------
        // ETAPE 2 : on supprime toutes les entrées dont le timestamp est plus vieux que 5 minutes
        
        // On stocke dans une variable le timestamp qu'il était il y a 5 minutes :
        $timestamp_5min = time() - (60 * 5); // 60 * 5 = nombre de secondes écoulées en 5 minutes
        mysql_query('DELETE FROM connectes WHERE timestamp < ' . $timestamp_5min.'and type_user="membre"');
        
        // -------
        // ETAPE 3 : on compte le nombre d'ip stockées dans la table. C'est le nombre de membre connectés
        $retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connectes WHERE type_user = "membre"');
        $donnees = mysql_fetch_array($retour);
        
        // Ouf ! On n'a plus qu'à afficher le nombre de connectés !
        
        if($donnees['nbre_entrees'] == 1)
        {
            $_SESSION['nbrconnectes'] =  'Il y a actuellement <strong>' . $donnees['nbre_entrees'] . '</strong> membres connect&eacute;';
        }else
        {
            $_SESSION['nbrconnectes'] =  'Il y a actuellement <strong>' . $donnees['nbre_entrees'] . '</strong> membres connect&eacute;s';
        }
    
        $_SESSION['messageUser'] = "<p style=\"color:green;font-weight:bold;font-size:12px;\">Vous &ecirc;tes connect&eacute;.</p>";
        $_SESSION['login'] = $login;
        $_SESSION['prenom'] = $row['prenom'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['id'] = $row['id'];
    }
    header('location:../forum.php');
}else{
    $_SESSION['messageUser'] = "<p style=\"color:red;font-weight:bold;font-size:12px;\">Erreur de mot de passe.</p>";
    header('location:../forum.php');
}

?>
