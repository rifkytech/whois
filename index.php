<!-- File Configuration WHOIS Data -->

<?php include 'config/whois.php'; ?>

<!-- Front End HTML5 -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/favicon.png" type="image/x-icon">

<!-- Meta Tag SEO -->
  <meta name="description" content="Whois Service Data The Domain & IP 100 % Free & No Ads" >
  <meta name="keywords" lang="en" content="whois, mexio.us, script whois, domain, ip" >

  <title>Whois Data Domain & IP <?php echo "$domain"; ?></title>

  <!-- Styles -->

  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="css/styles.css" rel="stylesheet">
</head>
<body>

  <div class="site-wrapper">
    <div class="site-wrapper-inner">
      <div class="main-container">
        <div class="inner cover">
          <span class="glyphicon glyphicon-link"></span>
          <h1>Whois Data Domain & IP</h1>
          <h4>whois.mexio.us</h4>

          <div class="row">

            <div class="col-lg-12">

              <form action="<?=$_SERVER['PHP_SELF'];?>">
              <div class="input-group input-group-lg">
                 <input type="text" class="form-control"  placeholder="Search for domain or IP..." name="domain" id="domain" value="<?=$domain;?>"> 
                <span class="input-group-btn">
                  <input type="submit" class="btn btn-shorten" value="Whois" title="WHOIS Lookup!"></p>
                </span>
              </form>


              </div>
            </div>
            <!-- Result Conf -->
            <?php include 'config/result.php'; ?>
            
            <div class="col-lg-12">
              <div id="link"></div>
            </div>
          </div>
            <br>
                <br>
                     <p>Copyright © 2018 Mexious Media. Version : v4.0</p>
                    </div>
                </div>
            </div>
        </div>
<!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.min.js"></script>

</body>
</html>
