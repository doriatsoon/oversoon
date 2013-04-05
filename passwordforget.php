<?php

//on démarre la session
session_name('admin');
@session_start();

//s'il y a un message pour l'utilisateur on l'affiche
if(isset ($_SESSION['messageUser'])){
    $messageUser = $_SESSION['messageUser'];
    unset ($_SESSION['messageUser']);
}else{
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
            <div id="barremenu">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="videos.php">Vid&eacute;oth&egrave;que</a></li>
                    <li><a href="liens.php">Liens</a></li>
                    <li><a href="contactezMoi.php">Contactez-moi</a></li>
                    <li><a href="forum.php">Forum</a></li>  
                </ul>
            </div>

            <div id="centre">
                <div class="title">Mot de passe oubli&eacute;</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div id="contentInscription">
                    <form action="action/passwordForgetAction.php" method="post" name="formulaire" onsubmit="return confirmeFormulairePassword();" >
                        <fieldset>
                            <legend>Compte</legend>
                            <p>
                                <label for="form_login">Identifiant:</label>
                                <input type="text" id="form_login" name="login" class="form"/>
                            </p>
                            <p>
                                <label for="form_mail">Adresse email:</label>
                                <input type="text" id="form_mail" name="mail" class="form"/>
                            </p>
                        </fieldset>
                        <p style="text-align:right">
                            <input type="submit" name="submit" class="submit" value="Soumettre" />
                            <input type="reset" name="reset" class="reset"/>
                        </p>
                    </form>
                </div>
            </div>

            <div id="menuDroite">

                <div class="title">Se connecter</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div id="contentDroite">
                    <form action="/action/authentificationAction.php" method="post">
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
                <div class="title">Information</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="contentDroite">
                    <table style="width:100%;">
                        <tr>
                            <td style="text-align:justify;width:70%;padding-left:15px;padding-right:10px;" colspan="2">
                                <p style="text-indent:20px;">Ce module ne vous permettra pas de retrouver votre mot de passe initial pour des raisons de s&eacute;curit&eacute; &eacute;videntes. Entrez votre <b>identifiant</b> et votre <b>adresse email</b> et un nouveau mot de passe vous sera communiqu&eacute;.</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:left;width:30%;padding-left:15px;" colspan="2"><?php echo $messageUser; ?></td>
                        </tr>
                    </table>
                </div>
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
