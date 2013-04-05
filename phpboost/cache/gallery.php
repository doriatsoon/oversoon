<?php
global $CONFIG_GALLERY;
$CONFIG_GALLERY = array (
  'width' => 150,
  'height' => 150,
  'width_max' => 800,
  'height_max' => 600,
  'weight_max' => 1024,
  'quality' => 80,
  'trans' => 40,
  'logo' => 'logo.jpg',
  'activ_logo' => 1,
  'd_width' => 5,
  'd_height' => 5,
  'nbr_column' => 4,
  'nbr_pics_max' => 16,
  'note_max' => 5,
  'activ_title' => 1,
  'activ_com' => 1,
  'activ_note' => 1,
  'display_nbrnote' => 1,
  'activ_view' => 1,
  'activ_user' => 1,
  'limit_member' => 10,
  'limit_modo' => 25,
  'display_pics' => 3,
  'scroll_type' => 1,
  'nbr_pics_mini' => 6,
  'speed_mini_pics' => 6,
  'auth_root' => 
  array (
    'r-1' => 1,
    'r0' => 3,
    'r1' => 7,
    'r2' => 7,
  ),
);

global $CAT_GALLERY;
$CAT_GALLERY['1']['id_left'] = '1';
$CAT_GALLERY['1']['id_right'] = '2';
$CAT_GALLERY['1']['level'] = '0';
$CAT_GALLERY['1']['name'] = 'Test';
$CAT_GALLERY['1']['aprob'] = '1';
$CAT_GALLERY['1']['auth'] = array (
  'r-1' => 1,
  'r0' => 1,
  'r1' => 3,
);

global $_array_random_pics;
$_array_random_pics = array(array(
'id' => '1',
'name' => 'PHPBoost 3!',
'path' => 'phpboost3.jpg',
'width' => 150,
'height' => 124,
'idcat' => '1',
'auth' => array (
  'r-1' => 1,
  'r0' => 1,
  'r1' => 3,
)),
);
?>