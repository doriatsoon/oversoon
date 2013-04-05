<?php

//on démarre la session
session_name('admin');
@session_start();
include 'function.php';

//s'il y a un message pour l'utilisateur on l'affiche
if(isset ($_SESSION['messageUser'])){
    $messageUser = $_SESSION['messageUser'];
    unset ($_SESSION['messageUser']);
}else{
    $messageUser="";
}

//récupération de l'id du user--------------------------------------------------
$id = $_GET['id'];

//connexion à la base-----------------------------------------------------------
connexion();

//on va chercher les informations concernant le user----------------------------
$sql = "select id,nom,prenom,login,birthday,role,activation,email,genre,inscription from membres where id = \"$id\"";
$query = mysql_query($sql);
$row = mysql_fetch_assoc($query);

//récupérationd des informations concernant le user dans le forum---------------
$sqlForum = "select membre_signature,membre_avatar from forum_membres where membre_pseudo = '".$row['login']."'";
$queryForum = mysql_query($sqlForum);
$rowForum = mysql_fetch_assoc($queryForum);

//on récupère la date de naissance: jour,mois,annee
list($jour,$mois,$annee) = split('/',$row['birthday']);


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
                <div class="title">Modifier votre profil</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div id="contentInscription">
                    <form action="action/modifierProfilAction.php" method="post" name="formulaire">
                        <fieldset>
                            <legend>Informations personnelles</legend>
                            <p>
                                <label for="form_nom">Nom:</label>
                                <input type="text" id="form_nom" name="nom" class="form" value="<?php echo $row['nom'];?>"/>
                            </p>
                            <p>
                                <label for="form_prenom">Pr&eacute;nom:</label>
                                <input type="text" id="form_prenom" name="prenom" class="form" value="<?php echo $row['prenom'];?>"/>
                            </p>
                            <p>
                                <label for="form_gender">Sexe:</label>
                                <select id="form_gender" name="gender" class="select">
                                    <option <?php if($row['genre'] == "H") echo "selected=\"selected\""; ?> value="H">Homme</option>
                                    <option <?php if($row['genre'] == "F") echo "selected=\"selected\""; ?> value="F">Femme</option>
                                </select>
                            </p>
                            <p>
                                <label for="form_day">Date de naissance:</label>
                                <input type="text" id="form_day" name="day" class="birthday" maxlength="2" value="<?php echo $jour;?>"/> /<input type="text" name="month" class="birthday" maxlength="2" id="form_month" value="<?php echo $mois;?>"/> /<input type="text" name="year" class="year" maxlength="4" id="form_year" value="<?php echo $annee;?>"/>
                            </p>
                        </fieldset>
                        <fieldset>
                            <legend>Compte</legend>
                            <p>
                                <label for="form_login">Identifiant:</label>
                                <input type="text" id="form_login" name="login" class="form" value="<?php echo $row['login'];?>"/>
                            </p>
                            <p>
                                <label for="form_mail">Adresse email:</label>
                                <input type="text" id="form_mail" name="mail" class="form" value="<?php echo $row['email'];?>"/>
                            </p>                                                        
                        </fieldset>
                        <fieldset>
                            <legend>Forum</legend>
                            <p>
                                <label for="form_signature">Signature:</label>
                                <input type="text" id="form_signature" name="signature" class="form" value="<?php echo $rowForum['membre_signature'];?>"/>
                            </p>
                            <p>
                                <label for="form_avatar">Avatar:</label>
                                <input type="text" id="form_avatar" name="avatar" class="form" value="<?php echo $rowForum['membre_avatar'];?>"/>
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
                <div class="title">Espace membre</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="contentDroite">                    
                    <table style="width:100%;">
                        <tr>
                            <td style="padding-left:15px;"><img src="images/icons/cc-kuser-32x32.gif" alt="user"/></td>
                            <td style="text-align:left;width:90%;"><?php echo $_SESSION['prenom'];echo " (".$_SESSION['role'].")"?></td>
                        </tr>
                        <tr>
                            <td style="text-align:left;width:50%;padding-left:10px;" colspan="2"><a href="action/deconnexionAction.php" style="text-decoration:none;color:#003322;"><img src="images/icons/ti-system-log-out-32x32.gif" title="Se d&eacute;connecter" alt="Se d&eacute;connecter"/></a></td>
                        </tr>
                    </table>
                </div>
                <?php } ?>
                <div class="title">Information</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="contentDroite">
                    <table style="width:100%;">
                        <tr>
                            <td style="text-align:left;width:50%;padding-left:10px;" colspan="2">Modifier votre profil grace &agrave; cette rubrique.</td>
                        </tr>
                        <tr>
                            <td style="text-align:left;width:50%;padding-left:10px;" colspan="2"><?php echo $messageUser; ?></td>
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
