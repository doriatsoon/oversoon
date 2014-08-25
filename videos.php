<?php
//on démarre la session
session_name('admin');
@session_start();
include 'function.php';
include 'tools/listeDeroulanteTool.php';
include 'requetes/requeteFilms.php';

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

<div class="row">
    <div class="large-12 columns">
        <h3>Vidéos</h3>
        <hr size="1" />
    </div>
</div>
<div class="row">
    <div class="large-3 columns">
        <form action="action/rechercheFilmsAction.php" method="post">
            <?php listeDeroulante(); ?>
            <input type="submit" value="Chercher" name="chercher" class="button expand"/>
        </form>
    </div>
    <div class="large-9 columns">
        <div class="row"> 
            <div class="large-12 columns">
                <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
                    <?php
                    if (isset($result)) {
                        while ($donnees_messages = mysql_fetch_assoc($result)) {
                            ?>
                            <li>
                                <ul class="pricing-table">
                                    <li class="title"><a href="#fichefilm&idFilm=<?php echo $donnees_messages['id']; ?>" rel="ajax"><?php echo $donnees_messages['titre']; ?></a></li>
                                    <li class="bullet-item"><img src="images/img_film/<?php echo  $donnees_messages['id']; ?>.jpg" style="width:120px;height:160px;" title="<?php echo trim(strtolower($row['titre'])); ?>"/></li>
                                    <li class="description"><?php echo $donnees_messages['acteur']; ?></li>
                                    <li class="bullet-item"><?php echo $donnees_messages['annee']; ?></li>
                                </ul>
                            </li>
                            <?php
                        }
                    }
                    ?>   
                </ul>
            </div>
        </div>


        <div class="row"> 
            <div class="large-6 large-centered columns">
                <ul class="pagination">
                    <?php
                    if (isset($numRow) && ($numRow > 10)) {
                        for ($k = 1; $k <= $nbrLink; $k++) {
                            if ($k == $pageSelected) {
                                echo "<li class=\"current\"><a href=\"action/changeIntervalAction.php?rang=" . $k . "\" class=\"lienPagination\">" . $k . "</a></li> ";
                            } else {
                                echo "<li><a href=\"action/changeIntervalAction.php?rang=" . $k . "\" class=\"lienPagination\">" . $k . "</a></li>";
                            }
                        }
                    }
                    ?>    
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
deconnexion();
?>