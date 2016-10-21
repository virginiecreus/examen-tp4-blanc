<?php
/**
 * Created by PhpStorm.
 * User: creus
 * Date: 21/10/16
 * Time: 10:58
 */

ini_set('display_error', 1);
error_reporting(E_ALL);
date_default_timezone_set('UTC');

define('NOM_DB' , 'examen_blanc');
define('UTILISATEUR_DB' , 'root');
define('MDP_DB' , '311286');

/*  = new PDO('mysql:host=localhost;dbname='.NOM_DB, UTILISATEUR_DB, MDP_DB, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')); */

$bdd = mysqli_connect("localhost", "root", "311286", "examen_blanc");
?>