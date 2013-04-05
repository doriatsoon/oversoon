<?php
include '../../function.php';
include '../../requetes/requeteFilms.php';
session_name('admin');
@session_start();

connexion();

$indiceDebut = 0;
$acteur = $_POST['acteur'];
$lettre = $_POST['lettre'];
$categorie = $_POST['categorie'];
$realisateur = $_POST['realisateur'];

//on met en session les valeurs de la recherche
$_SESSION['acteur'] = $acteur;
$_SESSION['lettre'] = $lettre;
$_SESSION['categorie'] = $categorie;
$_SESSION['realisateur'] = $realisateur;

$where = null;
$and = null;

if($acteur != "Acteur" || $lettre != "Lettre" || $categorie != "Categorie" || $realisateur != "Realisateur"){
    $where = "where";
}

if($acteur != "Acteur"){

    $requete = "acteur = \"$acteur\"";
}else{
    $requete = "";
}

if($lettre != "Lettre"){
    if($requete != ""){
        $requete = $requete." and titre like  '$lettre%'";

    }else{
        $requete = "titre like '$lettre%'";
    }
}

if($categorie != "Categorie"){
    if($requete != ""){
        $requete = $requete."and categorie =\"$categorie\" ";
    }else{
        $requete = "categorie = \"$categorie\"";
    }
}

if($realisateur != "Realisateur" ){
    if($requete != ""){
        $requete = $requete."and realisateur = \"$realisateur\" ";
    }else{
        $requete = "realisateur = \"$realisateur\" ";
    }
}


$sql= "SELECT * FROM film ".$where." ".$requete." order by titre";
$result = mysql_query($sql) or die ("SQL ERROR");
$numLigne = nbrFilm($result);
$nbrLien = ceil($numLigne / 10);

$sql= "SELECT * FROM film ".$where." ".$requete." order by titre asc limit ".$indiceDebut.",10";
$result = mysql_query($sql) or die ("SQL ERROR");

$_SESSION['sql'] = $sql;
$_SESSION['requete'] = $requete;
$_SESSION['where'] = $where;
$_SESSION['nbrLink'] = $nbrLien;
$_SESSION['numRow'] = $numLigne;
$_SESSION['result'] = $result;
$_SESSION['indiceDebut'] = $indiceDebut;

header('location:../videos.php');

?>
