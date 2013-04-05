<?php

function connexion(){
    mysql_connect ("localhost","root","") or die ("ERROR 01: CONNEXION A LA BASE DE DONNEES IMPOSSIBLE.");
    mysql_select_db("oversoon");
}

?>
