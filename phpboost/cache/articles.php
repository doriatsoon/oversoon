<?php
global $CONFIG_ARTICLES;
$CONFIG_ARTICLES = array (
  'nbr_articles_max' => 10,
  'nbr_cat_max' => 10,
  'nbr_column' => 2,
  'note_max' => 5,
  'auth_root' => 
  array (
    'r-1' => 1,
    'r0' => 1,
    'r1' => 1,
    'r2' => 1,
  ),
);

global $CAT_ARTICLES;
$CAT_ARTICLES['1']['id_left'] = '1';
$CAT_ARTICLES['1']['id_right'] = '2';
$CAT_ARTICLES['1']['level'] = '0';
$CAT_ARTICLES['1']['name'] = 'Catégorie de test';
$CAT_ARTICLES['1']['aprob'] = '1';
$CAT_ARTICLES['1']['auth'] = array (
  'r-1' => 1,
  'r0' => 1,
  'r1' => 1,
);

?>