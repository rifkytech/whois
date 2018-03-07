<?php include '../component/header.php'; ?>
<body>
  <div class="site-wrapper">
    <div class="site-wrapper-inner">
      <div class="main-container">
        <div class="inner cover">
            <h2><i class="fa fa-globe"></i></h2>
            <h1>Whois Data Domain & IP</h1>
              <h4>Free Whois Service For All</h4>
              <div class="row">
            <div class="col-lg-12">
                        <form role="form" action="select.php" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                        <input class="form-control" placeholder="Username" name="username" type="text" autofocus required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
                                        <input class="form-control" placeholder="Password" name="password" type="password" required>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-shorten">Login</button>
                            </fieldset>
                        </form>
                    </div>
                    
<?php include '../component/footer.php'; ?>