<?php

function listeDeroulante() {
    session_name('admin');
    @session_start();


    //requete pour les listes d�roulantes
    //acteur
    $sqlActeur = "SELECT distinct acteur FROM film where acteur != \" \" and acteur != \"inconnu\"  ORDER BY acteur ASC";
    $queryActeur = mysql_query($sqlActeur) or die("Impossible d'effectuer la requete SQL Acteur");

    $sqlActeur2 = "SELECT distinct acteur2 FROM film where acteur2 != \" \"  ORDER BY acteur2 ASC";
    $queryActeur2 = mysql_query($sqlActeur2) or die("Impossible d'effectuer la requete SQL Acteur");


    $sqlCategorie = "SELECT distinct categorie FROM film where categorie != \" \" and categorie != \"inconnu\"  ORDER BY categorie ASC";
    $queryCategorie = mysql_query($sqlCategorie) or die("Impossible d'effectuer la requete SQL Categorie");

    $sqlLettre = "SELECT distinct  lettre FROM lettre  ORDER BY lettre ASC";
    $queryLettre = mysql_query($sqlLettre) or die("Impossible d'effectuer la requete SQL Lettre");

    $sqlRealisateur = "SELECT distinct  realisateur FROM film where realisateur != \"inconnu\"  ORDER BY realisateur ASC";
    $queryRealisateur = mysql_query($sqlRealisateur) or die("Impossible d'effectuer la requete SQL");

    $sqlAnnee = "SELECT distinct annee FROM film  ORDER BY annee ASC";
    $queryAnnee = mysql_query($sqlAnnee) or die("Impossible d'effectuer la requete SQL");


    if (isset($_SESSION['acteur'])) {
        $acteurSelected = $_SESSION['acteur'];
        $categorieSelected = $_SESSION['categorie'];
        $realisateurSelected = $_SESSION['realisateur'];
        $lettreSelected = $_SESSION['lettre'];
        $anneeSelected = $_SESSION['annee'];

        echo '<select name="acteur"><option>Acteur</option>';

        while ($resultActeur = mysql_fetch_assoc($queryActeur)) {
            if ($resultActeur['acteur'] == $acteurSelected) {
                echo '<option value="' . $acteurSelected . '" selected>' . $acteurSelected . '</option>';
            } else {
                echo '<option value="' . $resultActeur['acteur'] . '">' . $resultActeur['acteur'] . '</option>';
            }
        }
        while ($resultActeur2 = mysql_fetch_assoc($queryActeur2)) {
            if ($resultActeur2['acteur2'] == $acteurSelected) {
                echo '<option value="' . $acteurSelected . '" selected>' . $acteurSelected . '</option>';
            } else {
                echo '<option value="' . $resultActeur2['acteur2'] . '">' . $resultActeur2['acteur2'] . '</option>';
            }
        }
        echo '</select>&nbsp;';



        echo '<select name="categorie"><option>Categorie</option>';

        while ($resultCategorie = mysql_fetch_assoc($queryCategorie)) {
            if ($resultCategorie['categorie'] == $categorieSelected) {
                echo '<option value="' . $categorieSelected . '" selected>' . $categorieSelected . '</option>';
            } else {
                echo '<option value="' . $resultCategorie['categorie'] . '">' . $resultCategorie['categorie'] . '</option>';
            }
        }
        echo '</select>&nbsp;';


        echo '<select name="lettre"><option>Lettre</option>';
        while ($resultLettre = mysql_fetch_assoc($queryLettre)) {
            if ($resultLettre['lettre'] == $lettreSelected) {
                echo '<option value="' . $lettreSelected . '" selected>' . $lettreSelected . '</option>';
            } else {
                echo '<option value="' . $resultLettre['lettre'] . '">' . $resultLettre['lettre'] . '</option>';
            }
        }
        echo '</select>&nbsp;';


        echo '<select name="realisateur"><option>Realisateur</option>';
        while ($resultRealisateur = mysql_fetch_assoc($queryRealisateur)) {
            if ($resultRealisateur['realisateur'] == $realisateurSelected) {
                echo '<option value="' . $realisateurSelected . '" selected>' . $realisateurSelected . '</option>';
            } else {
                echo '<option value="' . $resultRealisateur['realisateur'] . '">' . $resultRealisateur['realisateur'] . '</option>';
            }
        }
        echo '</select>&nbsp;';

        echo '<select name="annee"><option>Annee</option>';
        while ($resultAnnee = mysql_fetch_assoc($queryAnnee)) {
            if ($resultAnnee['annee'] == $anneeSelected) {
                echo '<option value="' . $anneeSelected . '" selected>' . $anneeSelected . '</option>';
            } else {
                echo '<option value="' . $resultAnnee['annee'] . '">' . $resultAnnee['annee'] . '</option>';
            }
        }
        echo '</select>';
    } else {

        echo '<select name="acteur"><option>Acteur</option>';
        while ($resultActeur = mysql_fetch_assoc($queryActeur)) {
            echo '<option value="' . $resultActeur['acteur'] . '">' . $resultActeur['acteur'] . '</option>';
        }
        echo '</select>&nbsp;';



        echo '<select name="categorie"><option>Categorie</option>';
        while ($resultCategorie = mysql_fetch_assoc($queryCategorie)) {
            echo '<option value="' . $resultCategorie['categorie'] . '">' . $resultCategorie['categorie'] . '</option>';
        }
        echo '</select>&nbsp;';


        echo '<select name="lettre"><option>Lettre</option>';
        while ($resultLettre = mysql_fetch_assoc($queryLettre)) {
            echo '<option value="' . $resultLettre['lettre'] . '">' . $resultLettre['lettre'] . '</option>';
        }
        echo '</select>&nbsp;';


        echo '<select name="realisateur"><option>Realisateur</option>';
        while ($resultRealisateur = mysql_fetch_assoc($queryRealisateur)) {
            echo '<option value="' . $resultRealisateur['realisateur'] . '">' . $resultRealisateur['realisateur'] . '</option>';
        }
        echo '</select>&nbsp;';

        echo '<select name="annee"><option>Annee</option>';
        while ($resultAnnee = mysql_fetch_assoc($queryAnnee)) {
            echo '<option value="' . $resultAnnee['annee'] . '">' . $resultAnnee['annee'] . '</option>';
        }
        echo '</select>';
    }
}

?>
