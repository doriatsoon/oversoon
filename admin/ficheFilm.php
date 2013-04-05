<?php

//on démarre la session
session_name('admin');
@session_start();
include '../function.php';
include '../tools/listeDeroulanteTool.php';
include '../requetes/requeteFilms.php';

//s'il y a un message pour l'utilisateur on l'affiche
if(isset ($_SESSION['messageUser'])){
    $messageUser = $_SESSION['messageUser'];
    unset ($_SESSION['messageUser']);
}else{
    $messageUser="";
}

$id = $_GET['id'];
$_SESSION['id'] = $id;

//connexion à la base
connexion();

//on va chercher les informations concernant le film
$sql = "select id,titre,categorie,duree,acteur,acteur2,acteur3,annee,realisateur,resume from film where id = \"$id\"";
$query = mysql_query($sql) or die ("SQL ERROR");
$row = mysql_fetch_assoc($query);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Oversoon.fr</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="page">
            <div id="bando">
                <div id="bienvenue">Bienvenue sur oversoon.fr</div>
            </div>
            <div id="barremenu"style="text-align:left;">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="611" height="30">
<param name="movie" value="swf/menu.swf?page=videos"/>
<param name="quality" value="highswg/menu.swf?page=videos"/>
<embed src="swf/menu.swf?page=videos" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="611" height="30"></embed></object>
                </div>

            <!-- Si l'utilisateur est connecté -->
            <?php if(!isset($_SESSION['login'])){?>
            <div id="centre">
                <div class="title">Vid&eacute;os</div>
                <hr style="margin-left:15px;margin-right:10px;margin-bottom:50px;" size="1"/>

                <div style="text-align:left;width:20%;margin-left:15px;display:inline;float:left;position:relative;">
                    <img src="images/icons/ti-2dialog-error-80x80.gif" alt="error"/>
                </div>
                <div style="text-align:left;width:75%;margin-top:35px;font-weight:bold;color:red;display:inline;float:left;position:relative;">
                    Cet onglet est r&eacute;serv&eacute; aux membres de ce site. Veuillez vous connecter gr&acirc;ce &agrave; la rubrique "Se connecter" situ&eacute;e sur votre droite.
                </div>
            </div>

            <!-- Cas ou l'utilisateur n'est pas connecté-->
            <?php }else{ ?>
            <div id="centre">
                <div class="title"><?php echo $row['titre']; ?></div>
                <hr style="margin-left:15px;margin-right:10px;" size="1" />
                <div id="contentVideo">

                    <!-- Emplacemement de l'image-->
                    <div id="img_film">
                    <?php
                        $filename = "images/img_film/".$id.".jpg";
                        if (file_exists($filename)) {
                    ?>
                            <img src="images/img_film/<?php echo $id;?>.jpg" style="width:120px;height:160px;" title="<?php echo trim(strtolower($row['titre']));?>" alt="film"/>
                    <?php } else { ?>
                        <img src="images/img_film/inconnu.jpg" style="width:120px;height:160px;" title="<?php echo strtolower($row['titre']);?>" alt="film"/>		
                    <?php } ?>
                    </div>

                    <!-- emplacement des informations du films-->
                        <p style="text-align:left;font-size:14px;"><strong>Ann&eacute;e de sortie </strong><?php echo $row['annee'];?></p>
                        <p style="text-align:left;font-size:14px;"><strong>R&eacute;alis&eacute; par </strong><?php echo $row['realisateur'];?></p>
                        <p style="text-align:left;font-size:14px;"><strong>Avec </strong><?php if($row['acteur2']!="" && $row['acteur3']!= ""){echo $row['acteur'].", ".$row['acteur2'].", ".$row['acteur3'];}else{echo $row['acteur'];}?></p>
                        <p style="text-align:left;font-size:14px;"><strong>Genre: </strong><?php echo $row['categorie'];?></p>
                        <p style="text-align:left;font-size:14px;"><strong>Dur&eacute;e: </strong><?php echo $row['duree'];?></p>
                        <p style="text-align:justify;font-size:14px;"><strong>R&eacute;sum&eacute;:</strong> <?php echo $row['resume'];?></p>                        
                </div>
            </div>
            <?php } ?>

            <!-- Menu de droite -->
            <div id="menuDroite">
            <?php if(!isset($_SESSION['login'])){?>
                <div class="title">Se connecter</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="contentDroite">
                    <form action="action/authentificationVideoAction.php" method="post">
                        <table style="width:100%;">
                            <tr>
                                <td style="text-align:left;width:30%;padding-left:15px;">Login:</td>
                                <td style="text-align:left;width:70%;"><input type="text" name="login"/></td>
                            </tr>
                            <tr>
                                <td style="text-align:left;width:30%;padding-left:15px;">Pass:</td>
                                <td style="text-align:left;width:70%;"><input type="password" name="pass"/></td>
                            </tr>
                            <tr>
                                <td style="text-align:left;width:30%;padding-left:15px;">Connexion:</td>
                                <td style="text-align:left;width:70%;"><input type="submit" value="Me connecter"/></td>
                            </tr>
                            <tr>
                                <td style="text-align:left;width:30%;padding-left:15px;"></td>
                                <td style="text-align:left;width:70%;"><a href="inscription.php" style="text-decoration:none;color:#003322;">Inscription</a> | <a href="passwordforget.php" style="text-decoration:none;color:#003322;">Mot de passe oubli&eacute;</a></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <?php } else{?>
                <div class="title">Espace administrateur</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="contentDroite">

                    <!-- Cas ou l'utilisateur est admin-->
                    <table style="width:100%;">
                        <tr>
                            <td style="padding-left:15px;"><img src="images/icons/cc-kuser-32x32.gif" alt="user"/></td>
                            <td style="text-align:left;width:90%;"><?php echo $_SESSION['prenom'];echo " (".$_SESSION['role'].")"?></td>
                        </tr>
                        <tr>
                            <td style="text-align:left;width:50%;padding-left:10px;" colspan="2"><a href="../index.php"><img src="images/icons/ti-go-home-32x32.gif" alt="home"/></a><a href="action/deconnexionVideoAction.php" style="text-decoration:none;color:#003322;"><img src="images/icons/ti-system-log-out-32x32.gif" title="Se d&eacute;connecter" alt="Se d&eacute;connecter"/></a></td>
                        </tr>
                    </table>                   
                </div>
                <div class="title">Panneau de contr&ocirc;le</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div id="contentDroite">
                    
                    <!-- Cas ou l'utilisateur est admin-->
                    <table style="width:100%;">     
                        <tr>
                            <td style="text-align:left;width:50%;padding-left:10px;" colspan="2"><a href="action/generePdfAction.php?idFilm=<?php echo $row['id'];?>" target="_blank"><img src="images/icons/cc-pdf2-32x32.gif" alt="pdf"/></a><a href="modifierFilm.php?id=<?php echo $id; ?>"><img src="images/icons/cc-db_update-32x32.gif" alt="update"/></a><a href="action/supprimerFilmAction.php?id=<?php echo $id; ?>"><img src="images/icons/cc-db_remove-32x32.gif" alt="remove"/></a></td>
                        </tr>
                    </table>
                    
                </div>
                <?php } ?>                
            </div>
        </div>
        <div id="basPage">                
            <div class="content">
                <p align="center" class="maj">
                    <a href="planSite.php" class="lienPagination">Plan du site</a> | <a href="mentionslegales.php" class="lienPagination">Mentions l&eacute;gales</a>                       
                </p>                
                <p align="center" style="margin-top:20px;">
                    <a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10-blue" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
                    <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/2.0/fr/"><img alt="Creative Commons License" style="border-width:0" src="http://creativecommons.org/images/public/somerights20.png" /></a>
                </p>
            </div>
        </div>
    </body>
</html>
