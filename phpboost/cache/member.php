<?php
global $CONFIG_USER, $CONTRIBUTION_PANEL_UNREAD, $ADMINISTRATOR_ALERTS;
$CONFIG_USER['activ_register'] = 1;
$CONFIG_USER['msg_mbr'] = 'Bienvenue sur le site. Vous �tes membre du site, vous pouvez acc�der � tous les espaces n�cessitant un compte utilisateur, �diter votre profil et voir vos contributions.';
$CONFIG_USER['msg_register'] = 'Vous vous appr�tez � vous enregistrer sur le site. Nous vous demandons d\'�tre poli et courtois dans vos interventions.<br />
<br />
Merci, l\'�quipe du site.';
$CONFIG_USER['activ_mbr'] = 0;
$CONFIG_USER['verif_code'] = 1;
$CONFIG_USER['verif_code_difficulty'] = 2;
$CONFIG_USER['delay_unactiv_max'] = 20;
$CONFIG_USER['force_theme'] = 0;
$CONFIG_USER['activ_up_avatar'] = 1;
$CONFIG_USER['width_max'] = 120;
$CONFIG_USER['height_max'] = 120;
$CONFIG_USER['weight_max'] = 20;
$CONFIG_USER['activ_avatar'] = 1;
$CONFIG_USER['avatar_url'] = 'no_avatar.png';
$CONTRIBUTION_PANEL_UNREAD = array (
  'r2' => 0,
  'r1' => 0,
  'r0' => 0,
);
$ADMINISTRATOR_ALERTS = array (
  'unread' => '0',
  'all' => '0',
);
?>