<?php
session_start();
require_once("../config/DBinfo.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM user WHERE username = '$username'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0) {
   header("location:../login/?username_notfound");
} else {
   if($pass <> $hasil['password']) {
     header("location:../login/?wrong_password.");
   } else {
     $_SESSION['username'] = $hasil['username'];
     header('location:../../panel/');
   }
}
?>