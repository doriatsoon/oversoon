<?php
global $MEDIA_CONFIG, $MEDIA_CATS;

$MEDIA_CONFIG = $MEDIA_CATS = array();

$MEDIA_CONFIG = array (
  'pagin' => 25,
  'nbr_column' => 2,
  'note_max' => 5,
  'width' => 900,
  'height' => 600,
);

$MEDIA_CATS[0] = array (
  'id_parent' => -1,
  'order' => 1,
  'name' => 'Multim�dia',
  'desc' => '<p style="text-align:center"><strong>Voici le module Multim�dia pour PHPboost 3.0</strong></p>',
  'visible' => true,
  'image' => 'media.png',
  'num_media' => 0,
  'mime_type' => 0,
  'active' => 4095,
  'auth' => 
  array (
    'r-1' => 1,
    'r0' => 3,
    'r1' => 7,
  ),
);

$MEDIA_CATS[1] = array (
  'id_parent' => 0,
  'order' => 1,
  'name' => 'Vid�os de PHPboost',
  'desc' => 'Cette cat�gorie contient des tutoriels vid�os afin de vous montrer certains actions que vous pourrez avoir besoin durant l\'utilisation de <a href="http://www.phpboost.com/pages/videos-de-demonstration">PHPboost</a>. Ces vid�os sont en streaming..',
  'visible' => true,
  'image' => '../media/templates/images/video.png',
  'num_media' => 3,
  'mime_type' => 2,
  'active' => 7914,
  'auth' => 
  array (
    'r-1' => 1,
    'r0' => 3,
    'r1' => 7,
  ),
);

$MEDIA_CATS[2] = array (
  'id_parent' => 0,
  'order' => 2,
  'name' => 'D�monstration',
  'desc' => 'Voici une cat�gorie de d�monstration.',
  'visible' => true,
  'image' => '../media/templates/images/audio.png',
  'num_media' => 1,
  'mime_type' => 1,
  'active' => 8191,
  'auth' => 
  array (
    'r-1' => 1,
    'r0' => 3,
    'r1' => 7,
  ),
);


?>