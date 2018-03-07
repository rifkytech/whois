<?php
// Database Setting
$host = "localhost";
$user = "DB_USER";
$pass = "DB_PASS";
$db = "DB";
$konek = mysql_connect($host, $user, $pass) or die ('Contact Administrator Server');
mysql_select_db($db);
?>
