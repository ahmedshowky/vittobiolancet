<!DOCTYPE html>
<html>
  <head>
    <title><?php getTitle() ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" type="image/png" href="<?php echo $img; ?>VIT-favicon.png">   
    <!--Medical Guide Icons-->
    <link href="<?php echo $fonts; ?>icons.css" rel="stylesheet">
    <!-- Default Color-->
    <link href="<?php echo $css; ?>default-color.css" rel="stylesheet" id="color" >
    <!-- Animate Css -->
    <link href="<?php echo $css; ?>animate.css" rel="stylesheet" >
    <!--bootstrap-->
    <link href="<?php echo $css; ?>bootstrap.css" rel="stylesheet">
    <!--Dropmenu-->
    <link href="<?php echo $css; ?>dropmenu.css" rel="stylesheet">
    <!--Sticky Header-->
    <link href="<?php echo $css; ?>sticky-header.css" rel="stylesheet">
    <!--Portfolio-->
    <link href="<?php echo $css; ?>cubeportfolio.min.css" rel="stylesheet">
    <link href="<?php echo $css; ?>/jquery.fancybox.css" rel="stylesheet">
    <!--revolution-->
    <link href="<?php echo $css; ?>style.css" rel="stylesheet">
    <link href="<?php echo $css; ?>settings.css" rel="stylesheet">
    <link href="<?php echo $css; ?>extralayers.css" rel="stylesheet">
    <!--Accordion-->
    <link href="<?php echo $css; ?>accordion.css" rel="stylesheet">
    <!--tabs-->
    <link href="<?php echo $css; ?>tabs.css" rel="stylesheet">
    <!--Owl Carousel-->
    <link href="<?php echo $css; ?>owl.carousel.css" rel="stylesheet">
    <!--main file-->
    <link href="<?php echo $css; ?>main.css" rel="stylesheet">
    <!-- Mobile Menu -->
    <link rel="stylesheet" href="<?php echo $css; ?>jquery.mmenu.all.css" />
    <link rel="stylesheet" href="<?php echo $css; ?>demo.css" />
    <!--PreLoader-->
    <link href="<?php echo $css; ?>loader.css" rel="stylesheet">
  </head>
  <body>
    <div id="wrap">
      <!--Start PreLoader-->
      <div id="preloader">
        <div id="status">&nbsp;</div>
        <div class="loader">
          <h1>Loading...</h1>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <!--End PreLoader-->
      <!--Start Header-->
      <header class="header">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <a href="index.php" class="logo"><img src="<?php echo $img; ?>Logo.jpg" alt=""></a>
             
            </div>
            <div class="col-md-8">
              <nav class="menu-2">
                <ul class="nav wtf-menu">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about-us.php">About Us</a></li>
                  <li><a href="Products.php">Products</a></li>
                  <li class="parent">
                    <a href="javascript:void(0)">Products</a>
                    <ul class="submenu">
                      <li> <a href="feed-additives.php">Feed Additives</a> </li>
                      <li> <a href="disinfectant.php">Disinfectant</a> </li>
                      <li> <a href="instruments.php">Instruments</a> </li>
                      <li> <a href="diagnostics.php">Diagnostics</a> </li>
                    </ul>
                  </li>
                  <li> <a href="contact-us.php">Contact Us</a> </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <!--End Header-->
      <!-- Mobile Menu Start -->
      <div class="container">
        <div id="page">
          <header class="header">
            <a href="#menu"></a>
          </header>
          <nav id="menu">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about-us.php">About Us</a></li>
              <li><a href="partners.php">Partners</a></li>
              <li class="parent">
                <a href="javascript:void(0)">Products</a>
                <ul class="submenu">
                  <li> <a href="feed-additives.php">Feed Additives</a> </li>
                  <li> <a href="disinfectant.php">Disinfectant</a> </li>
                  <li> <a href="instruments.php">Instruments</a> </li>
                  <li> <a href="diagnostics.php">Diagnostics</a> </li>
                </ul>
              </li>
              <li> <a href="contact-us.php">Contact Us</a> </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- Mobile Menu End -->




