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
                  <li><a href="Partners.php">Partners</a></li>
                  <li class="parent">
                    <a href="javascript:void(0)">Categories</a>
                    <ul class="submenu">
                      <!-- Vitamins Category -->
                      <li class="parent">
                        <a href="javascript:void(0)">Vitamins</a>
                        <ul class="submenu">
                          <li><a href="Lance-AD.php">Lance-AD</a></li>
                          <li><a href="Lance-Sel.php">Lance-Sel</a></li>
                          <li><a href="Lance-C.php">Lance-C</a></li>
                          <li><a href="Lance-K3.php">Lance-K3</a></li>
                          <li><a href="Lance-Mix.php">Lance-Mix</a></li>
                          <li><a href="Zela-Immune.php">Zela-Immune</a></li>
                        </ul>
                      </li>
                      <!-- Immune Booster Category -->
                      <li class="parent">
                        <a href="javascript:void(0)">Immune Booster</a>
                        <ul class="submenu">
                          <li><a href="Lari-Immune.php">Lari-Immune</a></li>
                          <li><a href="Immu-Lance.php">Immu-Lance</a></li>
                        </ul>
                      </li>
                      <!-- Organic Acids Category -->
                      <li class="parent">
                        <a href="javascript:void(0)">Organic Acids</a>
                        <ul class="submenu">
                          <li><a href="Lance-Acid.php">Lance-Acid</a></li>
                          <li><a href="Lance-Acid-Plus.php">Lance-Acid Plus</a></li>
                        </ul>
                      </li>
                      <!-- Mycotoxin Binder Category -->
                      <li class="parent">
                        <a href="javascript:void(0)">Mycotoxin Binder</a>
                        <ul class="submenu">
                          <li><a href="Myco-Lance.php">Myco-Lance</a></li>
                          <li><a href="Myco-Lance-Plus.php">Myco-Lance Plus</a></li>
                        </ul>
                      </li>
                      <!-- Milk Replacer Category -->
                      <li class="parent">
                        <a href="javascript:void(0)">Milk Replacer</a>
                        <ul class="submenu">
                          <li><a href="Lance-Mel.php">Lance-Mel</a></li>
                          <li><a href="Lance-Mel-Plus.php">Lance-Mel Plus</a></li>
                        </ul>
                      </li>
                      <!-- Other Categories -->
                      <li class="parent">
                        <a href="javascript:void(0)">Amino Acids</a>
                        <ul class="submenu">
                          <li><a href="Lance-Amino.php">Lance-Amino</a></li>
                  </ul>
                      </li>
                      <li class="parent">
                        <a href="javascript:void(0)">Liver Tonic</a>
                        <ul class="submenu">
                          <li><a href="Lance-Liv.php">Lance-Liv</a></li>
                        </ul>
                      </li>
                      <li class="parent">
                        <a href="javascript:void(0)">Diuretic</a>
                        <ul class="submenu">
                          <li><a href="Lance-Diur.php">Lance-Diur</a></li>
                        </ul>
                      </li>
                      <li class="parent">
                        <a href="javascript:void(0)">Mineral Mixture</a>
                        <ul class="submenu">
                          <li><a href="Lance-Bot.php">Lance-Bot</a></li>
                        </ul>
                      </li>
                      <li class="parent">
                        <a href="javascript:void(0)">Probiotics</a>
                        <ul class="submenu">
                          <li><a href="Pro-Lance.php">Pro-Lance</a></li>
                        </ul>
                      </li>
           
                   
                    </ul>
                  </li>
                  <li><a href="contact-us.php">Contact Us</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <!--End Header-->
      <!-- Mobile Menu Start -->
    <!-- Mobile Menu Start -->
<div class="container">
  <div id="page">
    <header class="header">
      <a href="#menu"></a>
    </header>
    <nav id="menu">
      <ul class="nav wtf-menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="about-us.php">About Us</a></li>
        <li><a href="partners.php">Partners</a></li>
        <li class="parent">
          <a href="javascript:void(0)">Categories</a>
          <ul class="submenu">
            <!-- Vitamins Category -->
            <li class="parent">
              <a href="javascript:void(0)">Vitamins</a>
              <ul class="submenu">
                <li><a href="Lance-AD.php">Lance-AD</a></li>
                <li><a href="Lance-Sel.php">Lance-Sel</a></li>
                <li><a href="Lance-C.php">Lance-C</a></li>
                <li><a href="Lance-K3.php">Lance-K3</a></li>
                <li><a href="Lance-Mix.php">Lance-Mix</a></li>
                <li><a href="Zela-Immune.php">Zela-Immune</a></li>
              </ul>
            </li>
            <!-- Immune Booster Category -->
            <li class="parent">
              <a href="javascript:void(0)">Immune Booster</a>
              <ul class="submenu">
                <li><a href="Lari-Immune.php">Lari-Immune</a></li>
                <li><a href="Immu-Lance.php">Immu-Lance</a></li>
              </ul>
            </li>
            <!-- Organic Acids Category -->
            <li class="parent">
              <a href="javascript:void(0)">Organic Acids</a>
              <ul class="submenu">
                <li><a href="Lance-Acid.php">Lance-Acid</a></li>
                <li><a href="Lance-Acid-Plus.php">Lance-Acid Plus</a></li>
              </ul>
            </li>
            <!-- Mycotoxin Binder Category -->
            <li class="parent">
              <a href="javascript:void(0)">Mycotoxin Binder</a>
              <ul class="submenu">
                <li><a href="Myco-Lance.php">Myco-Lance</a></li>
                <li><a href="Myco-Lance-Plus.php">Myco-Lance Plus</a></li>
              </ul>
            </li>
            <!-- Milk Replacer Category -->
            <li class="parent">
              <a href="javascript:void(0)">Milk Replacer</a>
              <ul class="submenu">
                <li><a href="Lance-Mel.php">Lance-Mel</a></li>
                <li><a href="Lance-Mel-Plus.php">Lance-Mel Plus</a></li>
              </ul>
            </li>
            <!-- Other Categories -->
            <li class="parent">
              <a href="javascript:void(0)">Amino Acids</a>
              <ul class="submenu">
                <li><a href="Lance-Amino.php">Lance-Amino</a></li>
              </ul>
            </li>
            <li class="parent">
              <a href="javascript:void(0)">Liver Tonic</a>
              <ul class="submenu">
                <li><a href="Lance-Liv.php">Lance-Liv</a></li>
              </ul>
            </li>
            <li class="parent">
              <a href="javascript:void(0)">Diuretic</a>
              <ul class="submenu">
                <li><a href="Lance-Diur.php">Lance-Diur</a></li>
              </ul>
            </li>
            <li class="parent">
              <a href="javascript:void(0)">Mineral Mixture</a>
              <ul class="submenu">
                <li><a href="Lance-Bot.php">Lance-Bot</a></li>
              </ul>
            </li>
            <li class="parent">
              <a href="javascript:void(0)">Probiotics</a>
              <ul class="submenu">
                <li><a href="Pro-Lance.php">Pro-Lance</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="contact-us.php">Contact Us</a></li>
      </ul>
    </nav>
  </div>
</div>
<!-- Mobile Menu End -->

      <!-- Mobile Menu End -->
    </div>
    <!-- JavaScript for enabling menu dropdown on hover or click -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var parents = document.querySelectorAll('.parent');
        parents.forEach(function(parent) {
          parent.addEventListener('mouseenter', function() {
            this.querySelector('.submenu').style.display = 'block';
          });
          parent.addEventListener('mouseleave', function() {
            this.querySelector('.submenu').style.display = 'none';
          });
        });
      });
    </script>
