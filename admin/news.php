<?php

//on démarre la session
session_name('admin');
@session_start();

//s'il y a un message pour l'utilisateur on l'affiche
if(isset ($_SESSION['messageUser'])) {
    $messageUser = $_SESSION['messageUser'];
    unset ($_SESSION['messageUser']);
}else {
    $messageUser="";
}

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
<param name="movie" value="swf/menu.swf?page=news"/>
<param name="quality" value="highswg/menu.swf?page=news"/>
<embed src="swf/menu.swf?page=news" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="611" height="30"></embed></object>
                </div>
            <!-- Si l'utilisateur est pas connecté -->
            <?php if(isset($_SESSION['role']) && $_SESSION['role'] == "utilisateur" || !isset($_SESSION['login'])) {?>
            <div id="centre">
                <div class="title">News</div>
                <hr style="margin-left:15px;margin-right:10px;margin-bottom:50px;" size="1"/>

                <div style="text-align:left;width:20%;margin-left:15px;display:inline;float:left;position:relative;">
                    <img src="images/icons/ti-2dialog-error-80x80.gif" alt="error"/>
                </div>
                <div style="text-align:left;width:75%;margin-top:35px;font-weight:bold;color:red;display:inline;float:left;position:relative;">
                    Cet onglet est r&eacute;serv&eacute; &agrave; l'administrateur de ce site.
                </div>
            </div>

            <!-- Cas ou l'utilisateur est connecté-->
            <?php }else { ?>
            <div id="centre">
                <div class="title">News</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div id="contentInscription">
                    <form action="action/ajoutNewsAction.php" method="post" name="formulaire" onsubmit="return confirmeFormulaire();" >
                        <fieldset>
                            <legend>Mise &agrave; jour</legend>
                            <p>
                                <label for="form_date">Date:</label>
                                <input type="text" id="form_date" name="date" class="form"/>
                            </p>
                            <p>
                                <label for="form_heure">Heure:</label>
                                <input type="text" id="form_heure" name="heure" class="form"/>
                            </p>
                            <p>
                                <label for="form_maj">Mise &agrave; effectu&eacute;e:</label>
                                <textarea id="form_maj" name="maj" class="form" cols="50" rows=""></textarea>
                            </p>
                        </fieldset>                        
                        <p style="text-align:right">
                            <input type="submit" name="submit" class="submit" value="Soumettre" />
                            <input type="reset" name="reset" class="reset"/>
                        </p>
                    </form>
                </div>
            </div>
            <?php } ?>
            <div id="menuDroite">

                <?php if(!isset($_SESSION['login'])) {?>
                <div class="title">Se connecter</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div id="contentDroite">
                    <form action="action/authentificationNewsAction.php" method="post">
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
                        </table>
                    </form>
                </div>
                <?php } else {?>
                <div class="title">Espace administrateur</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="contentDroite">
                        <?php if($_SESSION['role'] == "administrateur") {?>
                    <!-- Cas ou l'utilisateur est admin-->
                    <table style="width:100%;">
                        <tr>
                            <td style="padding-left:15px;"><img src="images/icons/cc-kuser-32x32.gif" alt="user"/></td>
                            <td style="text-align:left;width:90%;"><?php echo $_SESSION['prenom'];echo " (".$_SESSION['role'].")"?></td>
                        </tr>                        
                        <tr>
                            <td style="text-align:left;width:50%;padding-left:10px;" colspan="2"><a href="../index.php"><img src="images/icons/ti-go-home-32x32.gif" alt="home"/></a><a href="action/deconnexionAction.php" style="text-decoration:none;color:#003322;"><img src="images/icons/ti-system-log-out-32x32.gif" title="Se d&eacute;connecter" alt="Se d&eacute;connecter"/></a></td>
                        </tr>
                        <tr>
                            <td style="text-align:left;width:50%;padding-left:10px;" colspan="2"><?php echo $messageUser?></td>
                        </tr>
                    </table>
                        <?php }?>
                </div>
                <div class="title">Information</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1" />
                <div class="contentDroite">
                    <table style="width:100%;">
                        <tr>
                            <td style="text-align:left;width:30%;padding-left:15px;" colspan="2">Ce module permet l'insertion des news du site.</td>
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
