<?php
// include ('error.php');
//mysql connect
$host = "mysql51-66.pro";
$user = "lsiinforclient";
$pass = "1992maxime";
$base = "lsiinforclient";
$port = "3306";

mysql_connect($host, $user, $pass);
mysql_select_db($base);

$rootsite = "https://client.lsiinformatique.fr/";


//versionning

$version_actuel = "1.1.0";
?>