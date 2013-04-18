<?php
session_name('admin');
@session_start();
$_SESSION['indiceDebut'] = ($_GET['rang']-1)*10;
$_SESSION['pageSelected'] = $_GET['rang'];
header('location:../index.php#video');
?>
