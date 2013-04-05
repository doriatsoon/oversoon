<?php
include "classes/Artichow/BarPlot.class.php";

function histogramme(){

$graph = new Graph(400, 400);
$graph->setAntiAliasing(TRUE);
   
$values = array(19, 42, 15, -25, 3);

$plot = new BarPlot($values);
$plot->setBarColor(
     new Color(250, 230, 180)
);
$plot->setSpace(5, 5, NULL, NULL);
$plot->barShadow->setSize(3);
$plot->barShadow->setPosition(SHADOW_RIGHT_TOP);
$plot->barShadow->setColor(new Color(180, 180, 180, 10));
$plot->barShadow->smooth(TRUE);
   
$graph->add($plot);
$graph->draw();









}


?>