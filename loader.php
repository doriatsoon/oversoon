<?php

//Get the page parameter from the url
switch ($_GET['page']) {
    case 'accueil' : $page = 'accueil.php';
        break;
    case 'video' : $page = 'videos.php';
        break;
    case 'forum' : $page = 'forum.php';
        break;
    case 'contact' : $page = 'contactezMoi.php';
        break;
    case 'plan' : $page = 'forum.php';
        break;
    case 'mentions' : $page = 'forum.php';
        break;
    case 'inscription' : $page = 'inscription.php';
        break;
    case 'mdpforget' : $page = 'passwordforget.php';
        break;
    case 'updateprofile' : $page = 'modifierProfil.php';
        break;
    case 'mentionslegales' : $page = 'mentionslegales.php';
        break;
    case 'plansite' : $page = 'planSite.php';
        break;
    default : $page = 'accueil.php';
        break;
}
echo $page;
?>
