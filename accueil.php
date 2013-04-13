<?php

//import des librairies
include 'function.php';
//on récupère la liste des news-------------------------------------
connexion();
$limite = "5";
$sql = "select date,heure,contenu from news order by id desc limit " . $limite . "";
$query = mysql_query($sql) or die("SQL ERROR: TABLE NEWS");

deconnexion();
?>
<div class="title">Accueil</div>
<hr style="margin-left:15px;margin-right:10px;" size="1"/>
<div id="content_center">
<?php while ($row = mysql_fetch_assoc($query)) { ?>
        <p class="maj_titre">Mise &agrave; jour du <?php echo $row['date']; ?> &agrave; <?php echo $row['heure'] ?></p>
        <p class="maj"><?php echo $row['contenu']; ?></p>
<?php } ?>
</div>
