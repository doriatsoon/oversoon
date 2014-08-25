<div class="contain-to-grid sticky">

    <nav class="top-bar" data-topbar>
        <ul class="title-area">
            <li class="name">
                <h1><a href="#">Accueil</a></h1>
            </li>
        </ul>

        <section class="top-bar-section">
            <!-- Right Nav Section -->

            <ul class="right">
                <li class="has-dropdown not-click">
                    <?php if (isset($_SESSION['login'])) { ?>
                        <a href="#updateprofile&id=<?php echo $_SESSION['id']; ?>" rel="ajax">
                            <?php
                            echo $_SESSION['prenom'];
                            echo " (" . $_SESSION['role'] . ")"
                            ?>
                        </a>
                        <ul class="dropdown">
                            <li><a href="action/deconnexionAction.php">Se d&eacute;connecter</a></li>
                        </ul>
                    </li>
                <?php
                }
                if (!isset($_SESSION['login'])) {
                    ?>
                    <li>
                        <a href="#" data-reveal-id="authentification">Se connecter</a>
                    </li>
                <?php } else { ?>
                    <?php if ($_SESSION['role'] == "administrateur") { ?>
                        <a href="admin/index.php"><img src="images/icons/cc-yast_sysadmin-32x32.gif" alt="home" width="22px" height="22px"/></a>
                        <?php
                    }
                }
                ?>
            </ul>

            <!-- Left Nav Section -->
            <ul class="left">
                <?php if (isset($_SESSION['login'])) { ?>
                    <li><a href="#video" rel="ajax">Vid&eacute;oth&egrave;que</a></li>
<?php } ?>
            </ul>
        </section>
    </nav>


</div>