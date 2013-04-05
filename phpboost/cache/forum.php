<?php
global $CONFIG_FORUM;
$CONFIG_FORUM = array (
  'forum_name' => 'PHPBoost forum',
  'pagination_topic' => 20,
  'pagination_msg' => 15,
  'view_time' => 2592000,
  'topic_track' => 40,
  'edit_mark' => 1,
  'no_left_column' => 0,
  'no_right_column' => 0,
  'activ_display_msg' => 1,
  'display_msg' => '[R&eacute;gl&eacute;]',
  'explain_display_msg' => 'Sujet r&eacute;gl&eacute;?',
  'explain_display_msg_bis' => 'Sujet non r&eacute;gl&eacute;?',
  'icon_activ_display_msg' => 1,
  'auth' => 
  array (
    'r2' => 7,
  ),
  'display_connexion' => 0,
);

global $CAT_FORUM;
$CAT_FORUM['1']['id_left'] = '1';
$CAT_FORUM['1']['id_right'] = '4';
$CAT_FORUM['1']['level'] = '0';
$CAT_FORUM['1']['name'] = 'Cat&eacute;gorie de test';
$CAT_FORUM['1']['status'] = '1';
$CAT_FORUM['1']['aprob'] = '1';
$CAT_FORUM['1']['url'] = '';
$CAT_FORUM['1']['auth'] = array (
  'r-1' => 1,
  'r0' => 1,
  'r1' => 1,
  'r2' => 7,
);
$CAT_FORUM['2']['id_left'] = '2';
$CAT_FORUM['2']['id_right'] = '3';
$CAT_FORUM['2']['level'] = '1';
$CAT_FORUM['2']['name'] = 'Forum de test';
$CAT_FORUM['2']['status'] = '1';
$CAT_FORUM['2']['aprob'] = '1';
$CAT_FORUM['2']['url'] = '';
$CAT_FORUM['2']['auth'] = array (
  'r-1' => 1,
  'r0' => 3,
  'r1' => 7,
  'r2' => 7,
);

?>