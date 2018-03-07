<?php
//sesion
session_start();
if(!isset($_SESSION['username'])) {
header('location:login/'); }
else { $username = $_SESSION['username']; }
require_once("config/DBinfo.php");
$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$get = mysql_fetch_array($query);
$user = mysql_query("SELECT * FROM ");
$ip = $_SERVER['REMOTE_ADDR'];
$tanggal = date("d/m/Y");

?>
<?php include 'component/header.php'; ?>
<body>
	<div class="site-wrapper">
    <div class="site-wrapper-inner">
      <div class="main-container">
        <div class="inner cover">
        	<p>Welcome !</p>
        	<p>Ini Merupakan Panel Untuk Mengubah Brand Nama Whois Anda, Panel Juga Masih Banyak Bug, Jadi Mohon 
        		Maaf Jika Ada Error di Aplikasi Ini. Selalu Cek Versi di : <a href="https://github.com/rifkytech/whois/releases" target="_blank" title="Click For View Update"><font color="#000000"><i class="fa fa-github"></i> Github</a></font></p>

        	   <a href="setting"><button class="btn btn-shorten" type="button"><i class="fa fa-cogs"></i> Setting</button></a>
        	    <a href="logout.php"><button class="btn btn-shorten" type="button"><i class="fa fa-power-off"></i> Logout</button></a>

<?php include 'component/footer.php';?>
