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


$bdd = mysqli_connect("localhost", "root", "311286", "examen_blanc");
?>