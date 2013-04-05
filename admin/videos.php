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

if(isset($_SESSION['indiceDebut'])){
    $indiceDebut = $_SESSION['indiceDebut'];
}else{
    $indiceDebut = 0;
}

//connexion à la base
connexion();

if(!isset($_SESSION['sql'])){

    //on compte le nombre total de film pour créer les liens 1,2,3...
    $sql = mysql_query("SELECT * FROM film") or die("merde");
    $numRow = nbrFilm($sql);
    $nbrLink = ceil($numRow / 10);

    //requete pour l'affichage des films par 10
    $sql = $sql= "SELECT * FROM film order by titre asc limit ".$indiceDebut.",10";
    $result = mysql_query($sql);

}else{

    if(isset($_SESSION['where']) || isset($_SESSION['requete'])){
        $where = $_SESSION['where'];
        $requete = $_SESSION['requete'];
        $sql= "SELECT * FROM film ".$where." ".$requete." order by titre asc limit ".$indiceDebut.",10";
        $result = mysql_query($sql);
        $numRow = $_SESSION['numRow'];
    	$nbrLink = $_SESSION['nbrLink'];
        $_SESSION['sql'] = $sql;
    }
}

if(isset($_SESSION['nbrLink']) && isset($_SESSION['numRow'])){
    $numRow = $_SESSION['numRow'];
    $nbrLink = $_SESSION['nbrLink'];
}

if(isset($_SESSION['pageSelected'])){
    $pageSelected =  $_SESSION['pageSelected'];
}
else{
    $pageSelected = 1;
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
<param name="movie" value="swf/menu.swf?page=videos"/>
<param name="quality" value="highswg/menu.swf?page=videos"/>
<embed src="swf/menu.swf?page=videos" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="611" height="30"></embed></object>
                </div>


            <!-- Si l'utilisateur est pas connecté -->
            <?php
                if(isset($_SESSION['role']) && $_SESSION['role'] == "utilisateur" || !isset($_SESSION['login'])){?>
                    <div id="centre">
                <div class="title">Vid&eacute;os</div>
                <hr style="margin-left:15px;margin-right:10px;margin-bottom:50px;" size="1"/>

                <div style="text-align:left;width:20%;margin-left:15px;display:inline;float:left;position:relative;">
                    <img src="images/icons/ti-2dialog-error-80x80.gif" alt="error"/>
                </div>
                <div style="text-align:left;width:75%;margin-top:35px;font-weight:bold;color:red;display:inline;float:left;position:relative;">
                    Cet onglet est r&eacute;serv&eacute; &agrave; l'administrateur de ce site.
                </div>
            </div>
            <?php
                }else{ ?>
            
            
            <div id="centre">
                <div class="title">Vid&eacute;os</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1" />
                <div id="contentVideo">
                    <form action="action/rechercheFilmsAction.php" method="post">
                        <?php listeDeroulante(); ?>
                        <input type="submit" value="Chercher" name="chercher"/>
                    </form>

                    <table style="width:96%;border-collapse:collapse;margin-left:15px;margin-top:20px;font-size:11px">
                        <tr>
                            <td style="width:5%;background-color:#2C1E75;color:white;">N&deg;</td>
                            <td style="width:30%;background-color:#2C1E75;color:white;">Titre</td>
                            <td style="width:20%;background-color:#2C1E75;color:white;">Acteur</td>
                            <td style="width:20%;background-color:#2C1E75;color:white;">R&eacute;alisateur</td>
                            <td style="width:5%;background-color:#2C1E75;color:white;">Fiche</td>
                        </tr>
                        <?php
                            $indice = $indiceDebut;
                            if(isset($result)){
                                while($donnees_messages=mysql_fetch_assoc($result))
                                {
                                    $indice = $indice +1;
                                    if(($indice%2)==0){

                        ?>
                        <tr class="pair" onmousemove="javascript:changeColor(this);" onmouseout="colorDefault(this,'pair')" bgcolor="#D2D2FF">
                            <td><?php echo $indice;?></td>
                            <td><?php echo $donnees_messages['titre'];?></td>
                            <td><?php echo $donnees_messages['acteur'];?></td>
                            <td><?php echo $donnees_messages['realisateur'];?></td>
                            <td><a href="ficheFilm.php?id=<?php echo $donnees_messages['id'];?>"><img src="images/icons/ti-edit-paste-20x20.gif" alt="edit"/></a></td>
                        </tr>

                        <?php }else{?>
                        <tr class="impair" onmousemove="changeColor(this)" onmouseout="colorDefault(this,'impair')">
                            <td><?php echo $indice;?></td>
                            <td><?php echo $donnees_messages['titre']?></td>
                            <td><?php echo $donnees_messages['acteur']?></td>
                            <td><?php echo $donnees_messages['realisateur']?></td>
                            <td><a href="ficheFilm.php?id=<?php echo $donnees_messages['id'];?>"><img src="images/icons/ti-edit-paste-20x20.gif" alt="edit"/></a></td>
                        </tr>
                        <?php
                                }
                            }
                        } ?>   
                    </table>
                    <?php
                    if(isset($numRow) && ($numRow > 10)){
                        for($k=1;$k<=$nbrLink;$k++){
                            if($k == $pageSelected){
                                echo "[<a href=\"action/changeIntervalAction.php?rang=".$k."\" class=\"lienPagination\">".$k."</a>] ";
                            }
                            else{ 
                                echo "<a href=\"action/changeIntervalAction.php?rang=".$k."\" class=\"lienPagination\">".$k."</a> ";
                            }
                        }
                    }
                    ?>                    
                </div>
            </div>
            <?php } ?>

            <div id="menuDroite">

                <?php if(!isset($_SESSION['login'])){?>
                <div class="title">Se connecter</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1" />
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
                        </table>
                    </form>
                </div>
                <?php } else{?>
                <div class="title">Espace administrateur</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1" />
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
                <div class="title">Panneau de contr&ocirc;le</div>
                <hr style="margin-left:15px;margin-right:10px;" size="1"/>
                <div class="contentDroite">

                    <?php if($_SESSION['role'] == "administrateur"){?>
                    <!-- Cas ou l'utilisateur est admin-->
                    <table style="width:100%;">
                        <tr>
                            <td style="padding-left:15px;"></td>
                            <td style="text-align:left;width:90%;"></td>
                        </tr>
                        <tr>
                            <td style="text-align:left;width:50%;padding-left:10px;" colspan="2"><a href="ajoutFilm.php"><img src="images/icons/cc-db_add-32x32.gif" alt="add"/></a></td>
                        </tr>
                    </table>
                    <?php }?>
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
