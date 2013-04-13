<nav>
    <div id="barremenu">
        <ul>
            <li><a href="#accueil"  rel="ajax">Accueil</a></li>
            <li><a href="#video" rel="ajax">Vid&eacute;oth&egrave;que</a></li>
            <li><a href="#forum" rel="ajax">Forum</a></li>
        </ul>


        <?php if (isset($_SESSION['login'])) { ?>
            <a href="#updateprofile&id=<?php echo $_SESSION['id']; ?>" rel="ajax"><?php
                echo $_SESSION['prenom'];
                echo " (" . $_SESSION['role'] . ")"
                ?></a>
        <?php } ?>

        <?php if (!isset($_SESSION['login'])) { ?>
            <a id="connect_in_menu">Se connecter</a>
        <?php } else { ?>

            <?php if ($_SESSION['role'] == "administrateur") { ?>
                <a href="admin/index.php"><img src="images/icons/cc-yast_sysadmin-32x32.gif" alt="home" width="22px" height="22px"/></a>
            <?php } ?>

            <a href="action/deconnexionAction.php">Se d&eacute;connecter</a>
        <?php } ?>

    </div>
</nav>