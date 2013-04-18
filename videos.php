<?php
//on démarre la session
session_name('admin');
@session_start();
include 'function.php';
include 'tools/listeDeroulanteTool.php';
include 'requetes/requeteFilms.php';

//s'il y a un message pour l'utilisateur on l'affiche
if (isset($_SESSION['messageUser'])) {
    $messageUser = $_SESSION['messageUser'];
    unset($_SESSION['messageUser']);
} else {
    $messageUser = "";
}

if (isset($_SESSION['indiceDebut'])) {
    $indiceDebut = $_SESSION['indiceDebut'];
} else {
    $indiceDebut = 0;
}

//connexion à la base
connexion();

if (!isset($_SESSION['sql'])) {

    //on compte le nombre total de film pour créer les liens 1,2,3...
    $sql = mysql_query("SELECT * FROM film") or die("merde");
    $numRow = nbrFilm($sql);
    $nbrLink = ceil($numRow / 10);

    //requete pour l'affichage des films par 10
    $sql = $sql = "SELECT * FROM film order by titre asc limit " . $indiceDebut . ",10";
    $result = mysql_query($sql);
} else {

    if (isset($_SESSION['where']) || isset($_SESSION['requete'])) {
        $where = $_SESSION['where'];
        $requete = $_SESSION['requete'];
        $sql = "SELECT * FROM film " . $where . " " . $requete . " order by titre asc limit " . $indiceDebut . ",10";
        $result = mysql_query($sql);
        $numRow = $_SESSION['numRow'];
        $nbrLink = $_SESSION['nbrLink'];
        $_SESSION['sql'] = $sql;
    }
}

if (isset($_SESSION['nbrLink']) && isset($_SESSION['numRow'])) {
    $numRow = $_SESSION['numRow'];
    $nbrLink = $_SESSION['nbrLink'];
}

if (isset($_SESSION['pageSelected'])) {
    $pageSelected = $_SESSION['pageSelected'];
} else {
    $pageSelected = 1;
}

?>

<!-- Si l'utilisateur est pas connecté -->
<?php if (!isset($_SESSION['login'])) { ?>
    <div class="title">Vid&eacute;os</div>
    <hr style="margin-left:15px;margin-right:10px;margin-bottom:50px;" size="1"/>
    <?php include './forbiddenAcces.php';?>
<?php } else {
    ?>
    <div class="title">Vidéos</div>
    <hr style="margin-left:15px;margin-right:10px;" size="1" />
    <div id="contentVideo">
        
        <form action="action/rechercheFilmsAction.php" method="post">
            <?php listeDeroulante(); ?>
            <input type="submit" value="Chercher" name="chercher"/>
        </form>

        <table style="width:96%;border-collapse:collapse;margin-left:15px;margin-top:20px;font-size:14px">
            <tr>
                <td style="width:5%;background-color:#2C1E75;color:white;">N&deg;</td>
                <td style="width:30%;background-color:#2C1E75;color:white;">Titre</td>
                <td style="width:20%;background-color:#2C1E75;color:white;">Acteur</td>
                <td style="width:20%;background-color:#2C1E75;color:white;">R&eacute;alisateur</td>
                <td style="width:5%;background-color:#2C1E75;color:white;">Fiche</td>
            </tr>
            <?php
            $indice = $indiceDebut;
            if (isset($result)) {
                while ($donnees_messages = mysql_fetch_assoc($result)) {
                    $indice = $indice + 1;
                    if (($indice % 2) == 0) {
                        ?>
                        <tr class="pair" onmousemove="javascript:changeColor(this);" onmouseout="colorDefault(this, 'pair')" style="background-color: #FCFCFC">
                            <td><?php echo $indice; ?></td>
                            <td><?php echo $donnees_messages['titre']; ?></td>
                            <td><?php echo $donnees_messages['acteur']; ?></td>
                            <td><?php echo $donnees_messages['realisateur']; ?></td>
                            <td><a href="ficheFilm.php?idFilm=<?php echo $donnees_messages['id']; ?>"><img src="images/icons/ti-edit-paste-20x20.gif" alt="edit"/></a></td>
                        </tr>

                    <?php } else { ?>
                        <tr class="impair" onmousemove="changeColor(this)" onmouseout="colorDefault(this, 'impair')">
                            <td><?php echo $indice; ?></td>
                            <td><?php echo $donnees_messages['titre'] ?></td>
                            <td><?php echo $donnees_messages['acteur'] ?></td>
                            <td><?php echo $donnees_messages['realisateur'] ?></td>
                            <td><a href="ficheFilm.php?idFilm=<?php echo $donnees_messages['id']; ?>"><img src="images/icons/ti-edit-paste-20x20.gif" alt="edit"/></a></td>
                        </tr>
                        <?php
                    }
                }
            }
            ?>   
        </table>
        <?php
        if (isset($numRow) && ($numRow > 10)) {
            for ($k = 1; $k <= $nbrLink; $k++) {
                if ($k == $pageSelected) {
                    echo "[<a href=\"action/changeIntervalAction.php?rang=" . $k . "\" class=\"lienPagination\">" . $k . "</a>] ";
                } else {
                    echo "<a href=\"action/changeIntervalAction.php?rang=" . $k . "\" class=\"lienPagination\">" . $k . "</a> ";
                }
            }
        }
        ?>                    
    </div>
<?php }
deconnexion();
?>