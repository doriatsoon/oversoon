<?php

include '../../function.php';
connexion();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "delete from film where id=\"$id\" ";
    $query = mysql_query($sql) or die ("SQL ERROR");
    header('location:../videos.php');
}

?>
