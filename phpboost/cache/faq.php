<?php
global $FAQ_CONFIG, $FAQ_CATS, $RANDOM_QUESTIONS;

$FAQ_CONFIG = array (
  'faq_name' => 'FAQ PHPBoost',
  'num_cols' => 4,
  'display_block' => false,
  'global_auth' => 
  array (
    'r-1' => 1,
    'r0' => 1,
    'r1' => 3,
    'r2' => 3,
  ),
);

$FAQ_CATS = array();

$FAQ_CATS[0] = array (
  'display_mode' => 0,
  'auth' => 
  array (
    'r-1' => 1,
    'r0' => 1,
    'r1' => 3,
    'r2' => 3,
  ),
  'description' => 'Bienvenue dans la FAQ !<br />
<br />
2 catégories et quelques questions ont été créées pour vous montrer comment fonctionne ce module. Voici quelques conseils pour bien débuter sur ce module.<br />
<br />
<ul class="bb_ul">
	<li class="bb_li">Pour configurer votre module, rendez vous dans l\'<a href="/faq/admin_faq.php">administration du module</a>
	</li><li class="bb_li">Pour créer des catégories, <a href="/faq/admin_faq_cats.php?new=1">cliquez ici</a>
	</li><li class="bb_li">Pour créer des questions, rendez vous dans la catégorie souhaitée et cliquez sur \'Gérer la catégorie\' puis \'ajout\'</li></ul><br />
<br />
Pour personnaliser l\'accueil de ce module, <a href="/faq/management.php">cliquez ici</a><br />
Pour en savoir plus, n\'hésitez pas à consulter la documentation du module sur le site de PHPBoost.',
);
$FAQ_CATS[0]['name'] = '';
$FAQ_CATS[1] = array (
  'id_parent' => '0',
  'order' => '1',
  'name' => 'PHPBoost',
  'desc' => 'Des questions sur PHPBoost?',
  'visible' => true,
  'display_mode' => '0',
  'image' => 'faq.png',
  'num_questions' => '1',
  'description' => 'Des questions sur PHPBoost?',
  'auth' => false,
);
$FAQ_CATS[2] = array (
  'id_parent' => '0',
  'order' => '2',
  'name' => 'Dictionnaire',
  'desc' => '',
  'visible' => true,
  'display_mode' => '0',
  'image' => 'faq.png',
  'num_questions' => '1',
  'description' => '',
  'auth' => false,
);

$RANDOM_QUESTIONS = array (
  0 => 
  array (
    'id' => '1',
    'question' => 'Qu\'est ce qu\'un CMS?',
    'idcat' => '2',
  ),
  1 => 
  array (
    'id' => '2',
    'question' => 'Qu\'est-ce que PHPBoost ?',
    'idcat' => '1',
  ),
);
?>