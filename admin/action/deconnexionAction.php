<?php
//on tue la session
session_name('admin');
@session_start();
session_destroy();

//on revient sur la page d'index
header('location:../index.php');

?>
