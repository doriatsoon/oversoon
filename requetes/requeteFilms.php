<?php

//renvoie le nombre de film total qu'il y a dans la base de données
function nbrFilm($sql){
    $numRow = mysql_num_rows($sql);
    return $numRow;
}

?>
