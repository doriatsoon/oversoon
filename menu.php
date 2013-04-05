<div id="barremenu">
    <ul>
        <li><a href="index.php" >Accueil</a></li>
        <li><a href="videos.php">Vid&eacute;oth&egrave;que</a></li>
        <li><a href="contactezMoi.php">Contactez-moi</a></li>
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
        <a href="action/deconnexionAction.php">Se d&eacute;connecter</a>
    <?php } ?>

</div>