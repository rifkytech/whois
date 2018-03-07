<?php
// Database Setting
$host = "localhost";
$user = "root";
$pass = "whoami2002";
$db = "whois";
$konek = mysql_connect($host, $user, $pass) or die ('Contact Administrator Server');
mysql_select_db($db);
?>