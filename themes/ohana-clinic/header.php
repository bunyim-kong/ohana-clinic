<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components/header.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

<header class="navbar">
  <div class="header-top">
    <div class="container">

      <div class="header-info">
        <div class="info-item">
          <span>Ikebukuro, Toshima-ku, Tokyo</span>
        </div>

        <div class="info-item">
          <span><i class="fas fa-phone"></i> 03-3987-3090</span>
        </div>

        <div class="info-item">
          <span><i class="far fa-calendar-alt"></i> Monday – Sunday</span>
        </div>
      </div>

      <div class="social-links">
        <a href="">Facebook</a>
        <a href="">Instagram</a>
        <a href="">YouTube</a>
        <a href="">X</a>
      </div>

    </div>
  </div>

  <div class="header-bottom">
    <div class="container">

      <div class="logo">
        <a href=""><img src="<?php echo get_template_directory_uri() . '/asset/image/logo.png'; ?>" width="160"></a>
      </div>

      <nav class="nav">
        <a href="<?php echo home_url('home'); ?>">Home</a>
        <a href="<?php echo home_url('first-visit'); ?>">First Visit</a>
        <div class="nav-dropdown">
          <a href="<?php echo home_url(''); ?>">About us <i class="fas fa-chevron-down"></i></a>

          <div class="dropdown-menu">
            <a href="<?php echo home_url('philosophy-and-strength'); ?>">Philosophy and Strength</a>
            <a href="<?php echo home_url('treatment-result'); ?>">Treatment Result</a>
            <a href="<?php echo home_url('directors-introduction'); ?>">Director's Introduction</a>
            <a href="<?php echo home_url('doctor-introduction'); ?>">Doctor Introduction</a>
            <a href="<?php echo home_url('introduction-of-the-hospital'); ?>">Introduction of the Hospital</a>
          </div>
        </div>

        <div class="nav-dropdown">
          <a href="<?php echo home_url(''); ?>">Medical Information <i class="fas fa-chevron-down"></i></a>

          <div class="dropdown-menu">
            <a href="<?php echo home_url('preimplantation-genetic-testing'); ?>">PGT-A/PGT-SR Test</a>
            <a href="<?php echo home_url('egg-freezing'); ?>">Egg freezing</a>
            <a href="<?php echo home_url('in-vitro-fertilization'); ?>">In Vitro Fertilization</a>
            <a href="<?php echo home_url('general-fertility-treatment'); ?>">General Fertility Treatment</a>
            <a href="<?php echo home_url('fertility-testing'); ?>">Fertility testing</a>
            <a href="<?php echo home_url('other-treatment-and-testing'); ?>">Other treatment and testing</a>
          </div>
        </div>

        <a href="<?php echo home_url('contact'); ?>">Contact</a>
        <a href="<?php echo home_url('access-to-clinic'); ?>">Access & Clinic Hours</a>
      </nav>

      <div class="header-right">
        <a href="https://airrsv.net/keiai-clinic/calendar" class="btn">Booking</a>
      </div>

    </div>
  </div>
</header>
