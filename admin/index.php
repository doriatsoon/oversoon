<?php

//import des librairies
include '../function.php';

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
$sql = "select date,heure,contenu from news order by id desc limit 7";
$query = mysql_query($sql) or die ("SQL ERROR: TABLE NEWS");


//on compte le nombre de connecté les 5 dernieres minutes

// -------
// ETAPE 1 : on vérifie si l'IP se trouve déjà dans la table
// Pour faire ça, on n'a qu'à compter le nombre d'entrées dont le champ "ip" est l'adresse ip du visiteur
$retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connectes WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
$donnees = mysql_fetch_array($retour);

if ($donnees['nbre_entrees'] == 0) // L'ip ne se trouve pas dans la table, on va l'ajouter
{
    mysql_query('INSERT INTO connectes VALUES(\'' . $_SERVER['REMOTE_ADDR'] . '\', ' . time() . ')');
}
else // L'ip se trouve déjà dans la table, on met juste à jour le timestamp
{
    mysql_query('UPDATE connectes SET timestamp=' . time() . ' WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
}

// -------
// ETAPE 2 : on supprime toutes les entrées dont le timestamp est plus vieux que 5 minutes

// On stocke dans une variable le timestamp qu'il était il y a 5 minutes :
$timestamp_5min = time() - (60 * 5); // 60 * 5 = nombre de secondes écoulées en 5 minutes
mysql_query('DELETE FROM connectes WHERE timestamp < ' . $timestamp_5min);

// -------
// ETAPE 3 : on compte le nombre d'ip stockées dans la table. C'est le nombre de visiteurs connectés
$retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connectes');
$donnees = mysql_fetch_array($retour);


// Ouf ! On n'a plus qu'à afficher le nombre de connectés !

if($donnees['nbre_entrees'] == 1)
{
    $nbrconnectes =  'Il y a actuellement <strong>' . $donnees['nbre_entrees'] . '</strong> membre connect&eacute;';
}else
{
    $nbrconnectes =  'Il y a actuellement <strong>' . $donnees['nbre_entrees'] . '</strong> membres connect&eacute;s';
}

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
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="955" height="150">
<param name="movie" value="swf/bandeauWestern.swf"/>
<param name="quality" value="highswg/bandeauWestern.swf"/>
<embed src="swf/bandeauWestern.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="955" height="150"></embed></object>
            <div id="barremenu"style="text-align:left;">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="611" height="30">
<param name="movie" value="swf/menu.swf?page=index"/>
<param name="quality" value="highswg/menu.swf?page=index"/>
<embed src="swf/menu.swf?page=index" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="611" height="30"></embed></object>


                </div>

            <!-- Si l'utilisateur est pas connecté -->
            <?php
                if(isset($_SESSION['role']) && $_SESSION['role'] == "utilisateur" || !isset($_SESSION['login'])){?>
                    <div id="centre">
                <div class="title">Accueil</div>
                <hr style="margin-left:15px;margin-right:10px;margin-bottom:50px;" size="1"/>

                <div style="text-align:left;width:20%;margin-left:15px;display:inline;float:left;position:relative;">
                    <img src="images/icons/ti-2dialog-error-80x80.gif"/>
                </div>
                <div style="text-align:left;width:75%;margin-top:35px;font-weight:bold;color:red;display:inline;float:left;position:relative;">
                    Cet onglet est r&eacute;serv&eacute; &agrave; l'administrateur de ce site. 
                </div>
            </div>
             <?php
                }else{
             ?>

            <div id="centre">
                <div class="title">Accueil</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div id="content">
                    <?php while ($row = mysql_fetch_assoc($query)){?>

                    <p class="maj_titre">Mise &agrave; jour du <?php echo $row['date'];?> &agrave; <?php echo $row['heure']?></p>
                    <p class="maj"><?php echo $row['contenu'];?></p>

                    <?php } ?>
                </div>
            </div>
			<?php } ?>
            <div id="menuDroite">
                
                <?php if($_SESSION['role'] == "utilisateur"){ ?>
                <div class="title">Zone interdite</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="contentDroite">
                    
                </div>
                <?php }else if(!isset($_SESSION['login'])){?>
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
                            <td style="padding-left:15px;"><img src="images/icons/cc-kuser-32x32.gif" alt="user"/></td>
                            <td style="text-align:left;width:90%;"><?php echo $_SESSION['prenom'];echo " (".$_SESSION['role'].")"?></td>
                        </tr>
                        <tr>
                            <td style="text-align:left;width:50%;padding-left:10px;" colspan="2"><a href="../index.php"><img src="images/icons/ti-go-home-32x32.gif" alt="home"/></a><a href="action/deconnexionAction.php" style="text-decoration:none;color:#003322;"><img src="images/icons/ti-system-log-out-32x32.gif" title="Se d&eacute;connecter" alt="Se d&eacute;connecter"/></a></td>
                        </tr>
                    </table>
                    <?php }?>
                </div>
                <?php if($messageUser != "") {?>
                <div class="title">Information</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1" />
                <div class="contentDroite">
                    <table style="width:100%;">
                        <tr>
                            <td style="text-align:left;width:30%;padding-left:15px;" colspan="2"><?php echo $messageUser; ?></td>
                        </tr>
                    </table>
                </div>
                <?php } ?>
                <div class="title">Nombre de connect&eacute;s</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="contentDroite">                   
                    <table style="width:100%;">                        
                        <tr>
                            <td style="text-align:left;width:30%;padding-left:15px;" colspan="2"><?php echo $nbrconnectes; ?></td>
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
