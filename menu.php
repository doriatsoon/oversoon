<div id="barremenu">
    <ul>
        <li><a href="index.php" >Accueil</a></li>
        <li><a href="videos.php">Vid&eacute;oth&egrave;que</a></li>
        <li><a href="forum.php">Forum</a></li>
    </ul>


    <?php if (isset($_SESSION['login'])) { ?>
        <a href="modifierProfil.php?id=<?php echo $idMembre; ?>"><?php
            echo $_SESSION['prenom'];
            echo " (" . $_SESSION['role'] . ")"
            ?></a>
    <?php } ?>

    <?php if (!isset($_SESSION['login'])) { ?>
        <a id="connect_in_menu">Se connecter</a>
    <?php } else { ?>
        
        <?php if($_SESSION['role'] == "administrateur")  { ?>
        <a href="admin/index.php"><img src="images/icons/cc-yast_sysadmin-32x32.gif" alt="home" width="22px" height="22px"/></a>
        <?php } ?>
        
        <a href="action/deconnexionAction.php">Se d&eacute;connecter</a>
    <?php } ?>

</div>