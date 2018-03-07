<?php
include ('config/DBinfo.php');
$query = mysql_query("SELECT * FROM homepage");
$title = mysql_fetch_array($query);

$data = mysql_query("SELECT * FROM title");
$inc = mysql_fetch_array($data);
?>
<!-- Front End -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../assets/img/favicon.png" type="image/x-icon">
  <!-- Meta Tag SEO -->
  <meta name="description" content="Whois Service Data The Domain & IP 100 % Free & No Ads" >
    <meta name="keywords" lang="en" content="whois, mexio.us, script whois, domain, ip" >
      <title><?php echo $inc['content'];?></title>
  <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
      <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
          <link href="../assets/css/styles.css" rel="stylesheet">
</head>
<!-- End Header-->
