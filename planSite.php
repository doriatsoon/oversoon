<?php

//import des librairies
include 'function.php';

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

//on récupère la liste des mises à jour
connexion();
$sql = "select date,heure,contenu from news order by id desc";
$query = mysql_query($sql) or die ("SQL ERROR: TABLE NEWS");

//récupération de l'id du membre
$idMembre = $_SESSION['id'];

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
            <div id="barremenu">
                <ul>
                    <li><a href="index.php" class="active" >Accueil</a></li>
                    <li><a href="videos.php">Vid&eacute;oth&egrave;que</a></li>
                    <li><a href="liens.php">Liens</a></li>
                    <li><a href="contactezMoi.php">Contactez-moi</a></li>
                    <li><a href="forum.php">Forum</a></li>  
                </ul>
            </div>

            <div id="centre">
                <div class="title">Plan du site oversoon.free.fr</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div id="content">                                                    
                        <p class="maj_titre"><a href="index.php" class="lienPagination">Accueil</a></p>
                        <p class="maj">L'accueil contient toutes les mises &agrave; jour du site.</p>  
                        <p class="maj_titre"><a href="videos.php" class="lienPagination">Vid&eacute;oth&egrave;que</a></p>
                        <p class="maj">L'onglet "Vid&eacute;oth&egrave;que" est en fait un annuaire classant les films que je poss&egrave;de. Vous trouverez &eacute;galement une fiche d&eacute;taillant chaque film.</p>  
                        <p class="maj_titre"><a href="liens.php" class="lienPagination">Liens</a></p>
                        <p class="maj">L'onglet "Liens" propose une s&eacute;rie de lien pointant vers d'autres sites en rapport avec oversoon.free.fr</p>  
                        <p class="maj_titre"><a href="contactezMoi.php" class="lienPagination">Contactez-moi</a></p>    
                        <p class="maj">Si vous avez des suggestions, des id&eacute;es, ou des remarques &agrave; faire sur ce site, n'h&eacute;sitez pas &agrave; me contacter.</p>  
                        <p class="maj_titre"><a href="forum.php" class="lienPagination">Forum</a></p>    
                        <p class="maj">Exprimez-vous ou donnez votre avis sur diff�rents films sur le forum.</p>                           
                </div>
            </div>

            <div id="menuDroite">

                <?php if(!isset($_SESSION['login'])){?>
                <div class="title">Se connecter</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="contentDroite">
                    <form action="action/authentificationAction.php" method="post">
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

                    <?php if($_SESSION['role'] == "administrateur"){?>
                    <!-- Cas ou l'utilisateur est admin-->
                    <table style="width:100%;">
                        <tr>
                            <td style="padding-left:15px;"><img src="images/icons/cc-kuser-32x32.gif" alt="user"/></td>
                            <td style="text-align:left;width:90%;"><?php echo $_SESSION['prenom'];echo " (".$_SESSION['role'].")"?></td>
                        </tr>
                        <tr>
                            <td style="text-align:left;width:50%;padding-left:10px;" colspan="2"><a href="admin/index.php"><img src="images/icons/cc-yast_sysadmin-32x32.gif" alt="admin"/></a><a href="action/deconnexionAction.php" style="text-decoration:none;color:#003322;"><img src="images/icons/ti-system-log-out-32x32.gif" title="Se d&eacute;connecter" alt="Se d&eacute;connecter"/></a></td>
                        </tr>
                    </table>
                    <?php }else{?>
                    <!-- Cas ou l'utilisateur est utilisateur-->
                    <table style="width:100%;">
                        <tr>
                            <td style="padding-left:15px;"><img src="images/icons/cc-kuser-32x32.gif"/></td>
                            <td style="text-align:left;width:90%;"><?php echo $_SESSION['prenom'];echo " (".$_SESSION['role'].")"?></td>
                        </tr>
                        <tr>
                            <td style="text-align:left;width:50%;padding-left:10px;" colspan="2"><a href="modifierProfil.php?id=<?php echo $idMembre;?>" style="text-decoration:none;color:#003322;"><img src="images/icons/kate-32x32.png" title="Modifier son profil" alt="Modifier son profil"/></a><a href="action/deconnexionAction.php" style="text-decoration:none;color:#003322;"><img src="images/icons/ti-system-log-out-32x32.gif" title="Se d&eacute;connecter" alt="Se d&eacute;connecter"/></a></td>
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
                                <p>Ce module va vous permettre de consulter les mises &agrave; jour du site.</p>
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
