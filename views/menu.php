
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">QUARRY MANAGEMENT</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto
        <?php if (isset($_GET['action']) && $_GET['action'] == 'index'): ?>
                    active
                <?php endif;?>
        "            href="index.php?action=index">Home</a></li>

        <li><a class="nav-link scrollto
          <?php if (isset($_GET['action']) && $_GET['action'] == 'about'): ?>
                    active
                <?php endif;?>
          " href="index.php?action=about">About</a></li>

          <li><a class="nav-link scrollto
          <?php if (isset($_GET['action']) && $_GET['action'] == 'quarry_permittee'): ?>
                    active
                <?php endif;?>
          "
          href="index.php?action=quarry_permittee">QUARRY PERMITTEE</a></li>
          <li><a class="nav-link scrollto" href="#commercial-sand">COMMERCIAL SAND AND GRAVEL</a></li>
          <li><a class="nav-link scrollto" href="#industrial-sand">INDUSTRIAL SAND AND GRAVEL</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->