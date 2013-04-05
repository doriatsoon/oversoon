<?php

session_name('admin');
@session_start();

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
                <div class="title">Inscription</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div id="contentInscription">
                    <form action="action/inscriptionAction.php" method="post" name="formulaire" onsubmit="return confirmeFormulaire();" >
                        <fieldset>
                            <legend>Informations personnelles</legend>
                            <p>
                                <label for="form_nom">Nom:</label>
                                <input type="text" id="form_nom" name="nom" class="form"/>
                            </p>
                            <p>
                                <label for="form_prenom">Pr&eacute;nom:</label>
                                <input type="text" id="form_prenom" name="prenom" class="form"/>
                            </p>
                            <p>
                                <label for="form_gender">Sexe:</label>
                                <select id="form_gender" name="gender" class="select"><option value="H">Homme</option><option value="F">Femme</option></select>
                            </p>
                            <p>
                                <label for="form_day">Date de naissance:</label>
                                <input type="text" id="form_day" name="day" class="birthday" maxlength="2"/> /<input type="text" name="month" class="birthday" maxlength="2" id="form_month"/> /<input type="text" name="year" class="year" maxlength="4" id="form_year"/>
                            </p>
                        </fieldset>
                        <fieldset>
                            <legend>Compte</legend>
                            <p>
                                <label for="form_login">Identifiant:</label>
                                <input type="text" id="form_login" name="login" class="form"/>
                            </p>
                            <p>
                                <label for="form_password">Mot de passe:</label>
                                <input type="password" id="form_password" name="password" class="form"/>
                            </p>
                            <p>
                                <label for="form_password2">Confirmer le mot de passe:</label>
                                <input type="password" id="form_password2" name="password2" class="form"/>
                            </p>
                            <p>
                                <label for="form_mail">Adresse email:</label>
                                <input type="text" id="form_mail" name="mail" class="form"/>
                            </p>
                        </fieldset>
                        <fieldset>
                            <legend>Forum</legend>
                            <p>
                                <label for="form_signature">Signature:</label>
                                <input type="text" id="form_signature" name="signature" class="form"/>
                            </p>
                            <p>
                                <label for="form_avatar">Avatar:</label>
                                <input type="text" id="form_avatar" name="avatar" class="form"/>
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
                <div class="title">Information</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="contentDroite">
                    <table style="width:100%;">
                        <tr>
                            <td style="text-align:justify;width:70%;padding-left:15px;padding-right:10px;" colspan="2">
                                <p>
                                    Par mesure de s&eacute;curit&eacute;, les inscriptions sont mod&eacute;r&eacute;es par l'administrateur de ce site.
                                    De fait, l'administrateur de ce site inspectera votre inscription et la validera dans les plus brefs d&eacute;lais. Vous recevrez un mail de validation
                                    lorsque celle-ci sera valid&eacute;e.
                                </p>
                            </td>
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
