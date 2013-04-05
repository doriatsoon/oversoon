<?php
if (!defined('DBSECURE'))
{
   $sql_host = "oversoon.sql.free.fr"; //Adresse serveur MySQL - MySQL server address
   $sql_login = "oversoon"; //Login
   $sql_pass = "leibniz"; //Mot de passe - Password
   $sql_base = "oversoon"; //Nom de la base de données - Database name
   define('PREFIX' , 'phpboost_'); //Préfixe des tables - Tables prefix
   define('DBSECURE', true);
   define('PHPBOOST_INSTALLED', true);
   
   require_once PATH_TO_ROOT . '/kernel/db/tables.php';
}
else
{
   exit;
}
?>