<?php include 'component/header.php'; ?>
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
      <?php include 'config/result.php'; ?>
            <div class="col-lg-12">
              <div id="link"></div>
            </div>
          </div>
        <?php include 'component/footer.php'; ?>
