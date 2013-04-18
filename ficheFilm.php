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

$idFilm = $_GET['idFilm'];
$_SESSION['idFilm'] = $idFilm;

//connexion à la base
connexion();

//on va chercher les informations concernant le film
$sql = "select id,titre,categorie,duree,acteur,acteur2,acteur3,annee,realisateur,resume from film where id = \"$idFilm\"";
$query = mysql_query($sql);
$row = mysql_fetch_assoc($query);

?>

<!-- Si l'utilisateur est connecté -->
<?php if (!isset($_SESSION['login'])) { ?>
    <div id="centre">
        <div class="title">Vid&eacute;os</div>
        <hr style="margin-left:15px;margin-right:10px;margin-bottom:50px;" size="1"/>
        <?php include './forbiddenAcces.php';?>
    </div>

    <!-- Cas ou l'utilisateur n'est pas connecté-->
<?php } else { ?>
    <div id="centre">
        <div class="title"><?php echo $row['titre']; ?></div>
        <hr style="margin-left:15px;margin-right:10px;" size="1"/>
        <div id="contentVideo">

            <!-- Emplacemement de l'image-->
            <div id="img_film">
    <?php
    $filename = "images/img_film/" . $idFilm . ".jpg";
    if (file_exists($filename)) {
        ?>
                    <img src="images/img_film/<?php echo $idFilm; ?>.jpg" style="width:120px;height:160px;" title="<?php echo trim(strtolower($row['titre'])); ?>"/>
                <?php } else { ?>
                    <img src="images/img_film/inconnu.jpg" style="width:120px;height:160px;" title="<?php echo strtolower($row['titre']); ?>"/>		
                <?php } ?>
            </div>

            <!-- emplacement des informations du films-->                 
            <p style="text-align:left;font-size:14px;"><strong>Ann&eacute;e de sortie </strong><?php echo $row['annee']; ?></p>
            <p style="text-align:left;font-size:14px;"><strong>R&eacute;alis&eacute; par </strong><?php echo $row['realisateur']; ?></p>
            <p style="text-align:left;font-size:14px;"><strong>Avec </strong><?php if ($row['acteur2'] != "" && $row['acteur3'] != "") {
                echo $row['acteur'] . ", " . $row['acteur2'] . ", " . $row['acteur3'];
            } else {
                echo $row['acteur'];
            } ?></p>
            <p style="text-align:left;font-size:14px;"><strong>Genre: </strong><?php echo $row['categorie']; ?></p>
            <p style="text-align:left;font-size:14px;"><strong>Dur&eacute;e: </strong><?php echo $row['duree']; ?></p>
            <p style="text-align:justify;font-size:14px;"><strong>R&eacute;sum&eacute;:</strong> <?php echo $row['resume']; ?></p>                                                    
        </div>

    </div>
<?php } ?>