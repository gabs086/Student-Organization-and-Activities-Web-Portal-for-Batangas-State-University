<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'portal'; 

$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");

?>