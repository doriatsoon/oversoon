<?php
global $DOWNLOAD_CATS;
global $CONFIG_DOWNLOAD;

$CONFIG_DOWNLOAD = array (
  'nbr_file_max' => 10,
  'nbr_column' => 2,
  'note_max' => 5,
  'root_contents' => 'Bienvenue dans l\'espace de téléchargement du site!',
  'global_auth' => 
  array (
    'r-1' => 1,
    'r0' => 5,
    'r1' => 7,
  ),
);
$DOWNLOAD_CATS = array();

$DOWNLOAD_CATS[0] = array (
  'name' => 'Racine',
  'auth' => 
  array (
    'r-1' => 1,
    'r0' => 5,
    'r1' => 7,
  ),
);

$DOWNLOAD_CATS[1] = array (
  'id_parent' => '0',
  'order' => '1',
  'name' => 'Catégorie de test',
  'contents' => 'Test des téléchargements',
  'visible' => true,
  'icon' => 'download.png',
  'description' => 'Test des téléchargements',
  'num_files' => '1',
  'auth' => false,
);

?>