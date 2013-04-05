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

//on récupère les informations concernant le film

$idFilm = $_GET['id'];
$_SESSION['id'] = $idFilm;

//connexion à la base
connexion();

//on va chercher les informations concernant le film
$sql = "select * from film where id = \"$id\"";
$query = mysql_query($sql);
$row = mysql_fetch_assoc($query);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
        <title>Oversoon.fr</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <script src="js/function.js" type="text/javascript"></script>
    </head>

    <body>
        <div id="page">
            <div id="bando"><div id="bienvenue">Bienvenue sur oversoon.fr</div></div>
            <div id="barremenu"style="text-align:left;">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="611" height="30">
<param name="movie" value="swf/menu.swf?page=videos"/>
<param name="quality" value="highswg/menu.swf?page=videos"/>
<embed src="swf/menu.swf?page=videos" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="611" height="30"></embed></object>
                </div>

            <div id="centre">
                <div class="title">Vid&eacute;oth&egrave;que</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div id="contentVideo">
                    <form action="action/modifierFilmAction.php" method="post" name="formulaire" enctype="multipart/form-data">
                        <fieldset>
                            <legend>Fiche du film</legend>
                            <p>
                                <label for="form_titre">Titre:</label>
                                <input type="text" id="form_titre" name="titre" class="form" value="<?php echo $row['titre']; ?>"/>
                            </p>
                            <p>
                                <label for="form_annee">Ann&eacute;e de sortie:</label>
                                <input type="text" id="form_annee" name="annee" class="form" value="<?php echo $row['annee']; ?>"/>
                            </p>
                            <p>
                                <label for="form_real">R&eacute;alisateur:</label>
                                <input type="text" id="form_real" name="real" class="form" value="<?php echo $row['realisateur']; ?>"/>
                            </p>
                            <p>
                                <label for="form_acteur">Acteur:</label>
                                <input type="text" id="form_acteur" name="acteur" class="form" value="<?php echo $row['acteur']; ?>"/>
                            </p>
                            <p>
                                <label for="form_acteur2">Acteur 2:</label>
                                <input type="text" id="form_acteur2" name="acteur2" class="form" value="<?php echo $row['acteur2']; ?>"/>
                            </p>
                            <p>
                                <label for="form_acteur3">Acteur 3:</label>
                                <input type="text" id="form_acteur3" name="acteur3" class="form" value="<?php echo $row['acteur3']; ?>"/>
                            </p>
                            <p>
                                <label for="form_genre">Genre:</label>
                                <input type="text" id="form_genre" name="genre" class="form" value="<?php echo $row['categorie']; ?>"/>
                            </p>
                            <p>
                                <label for="form_duree">Dur&eacute;e:</label>
                                <input type="text" id="form_duree" name="duree" class="form" value="<?php echo $row['duree']; ?>"/>
                            </p>
                            <p>
                                <label for="form_resume">R&eacute;sum&eacute;:</label>
                                <textarea id="form_resume" name="resume" class="form" cols="50" rows=""><?php echo $row['resume']; ?></textarea>
                            </p>
                            <p>
                                <label for="form_affiche">Affiche du film:</label>
                                <input type="hidden" name="MAX_FILE_SIZE"  value="10240"/><input type="file" name="monfichier" class="form" id="form_affiche"/>
                            </p>
                        </fieldset>
                        <p style="text-align:right">
                            <input type="submit" name="submit" class="submit" value="Soumettre"/>
                            <input type="reset" name="reset" class="reset"/>
                        </p>
                    </form>
                </div>
            </div>

            <div id="menuDroite">

                <?php if(!isset($_SESSION['login'])){?>
                <div class="title">Se connecter</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="contentDroite">
                    <form action="../action/authentificationAction.php" method="post">
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
                    <?php if($_SESSION['role'] == "administrateur"){?>
                    <!-- Cas ou l'utilisateur est admin-->
                    <table style="width:100%;">
                        <tr>
                            <td style="padding-left:15px;"><img src="images/icons/cc-kuser-32x32.png" alt="user"/></td>
                            <td style="text-align:left;width:90%;"><?php echo $_SESSION['prenom'];echo " (".$_SESSION['role'].")"?></td>
                        </tr>
                        <tr>
                            <td style="text-align:left;width:50%;padding-left:10px;" colspan="2"><a href="../index.php"><img src="images/icons/ti-go-home-32x32.png" alt="home"/></a><a href="action/deconnexionAction.php" style="text-decoration:none;color:#003322;"><img src="images/icons/ti-system-log-out-32x32.png" title="Se d&eacute;connecter" alt="Se d&eacute;connecter"/></a></td>
                        </tr>
                    </table>
                    <?php }?>
                </div>
                <?php } ?>
                <div class="title">Information</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="contentDroite">
                    <table style="width:100%;">
                        <tr>
                            <td style="text-align:justify;width:70%;padding-left:15px;padding-right:10px;" colspan="2">
                                <p style="text-indent:20px;">Si vous avez des suggestions &agrave; faire &agrave; propos du site, n'h&eacute;sitez pas &agrave; me le signaler en me contactant. Je prendrai toute suggestion en consid&eacute;ration. Merci &agrave; tous. </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div id="basPage">                
                <div class="content">
                    <p align="center" class="maj" style="margin-top:40px;">
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
