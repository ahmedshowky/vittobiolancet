<?php $pageTitle = 'Instruments'; ?>
<?php include 'init.php';

// Directory containing the banner images
$bannerDir = $img . 'sub banners/';

// Get all image files from the directory
$images = array_filter(scandir($bannerDir), function($file) use ($bannerDir) {
    // Filter out non-image files and hidden files
    return in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']) && !is_dir($bannerDir . $file);
});

// Select a random image from the available images
$randomImage = $images ? $bannerDir . $images[array_rand($images)] : 'default-banner.jpg'; // Fallback to a default image if none found
?>

<!--Start Banner-->
<div class="sub-banner">
  <img class="banner-img" src="<?php echo $randomImage; ?>" alt="">
  <div class="detail">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="paging">
            <h2><?php getTitle() ?></h2>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a><?php getTitle() ?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Banner-->


<!--Start Content-->
<div class="content">
  <div class="services-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="shop clearfix list-unstyled">
            <li>
              <div class="product">
                <div class="product-thumb">
                  <a><img src="<?php echo $img; ?>products/instruments/Eco-Matic+Tube.jpg" alt=""></a>
                </div>
                <div class="product-description clearfix">
                    <h3>Eco-Matic+Tube</h3>
                    <!-- <p class="price">category</p> -->
                    <span class="double-border"></span>
                  </div>
              </div>
            </li>
            <li>
              <div class="product">
                <div class="product-thumb">
                  <a><img src="<?php echo $img; ?>products/instruments/Eco-Matic.jpg" alt=""></a>
                </div>
                <div class="product-description clearfix">
                    <h3>Eco-Matic</h3>
                    <!-- <p class="price">category</p> -->
                    <span class="double-border"></span>
                  </div>
              </div>
            </li>
            <li>
              <div class="product">
                <div class="product-thumb">
                  <a><img src="<?php echo $img; ?>products/instruments/Drench-Matic.jpg" alt=""></a>
                </div>
                <div class="product-description clearfix">
                  <h3>Drench-Matic</h3>
                  <!-- <p class="price">category</p> -->
                  <span class="double-border"></span>
                </div>
              </div>
            </li>
            <li>
              <div class="product">
                <div class="product-thumb">
                  <a><img src="<?php echo $img; ?>products/instruments/Unin-Matic.jpg" alt=""></a>
                </div>
                <div class="product-description clearfix">
                  <h3>Uni Matic</h3>
                  <!-- <p class="price">category</p> -->
                  <span class="double-border"></span>
                </div>
              </div>
            </li>
            <li>
              <div class="product">
                <div class="product-thumb">
                  <a><img src="<?php echo $img; ?>products/instruments/Multi-Matic.jpg" alt=""></a>
                </div>
                <div class="product-description clearfix">
                    <h3>Multi Matic</h3>
                    <!-- <p class="price">category</p> -->
                    <span class="double-border"></span>
                  </div>
              </div>
            </li>
            <li>
              <div class="product">
                <div class="product-thumb">
                  <a><img src="<?php echo $img; ?>products/instruments/Manual-Syringe.jpg" alt=""></a>
                </div>
                <div class="product-description clearfix">
                    <h3>Manual Syringe</h3>
                    <!-- <p class="price">category</p> -->
                    <span class="double-border"></span>
                  </div>
              </div>
            </li>
            <li>
              <div class="product">
                <div class="product-thumb">
                  <a><img src="<?php echo $img; ?>products/instruments/Reusable-Needles.jpg" alt=""></a>
                </div>
                <div class="product-description clearfix">
                    <h3>Reusable Needles</h3>
                    <!-- <p class="price">category</p> -->
                    <span class="double-border"></span>
                  </div>
              </div>
            </li>
            <li>
              <div class="product">
                <div class="product-thumb">
                  <a><img src="<?php echo $img; ?>products/instruments/Sterile-Needles.jpg" alt=""></a>
                </div>
                <div class="product-description clearfix">
                    <h3>Sterile Needles</h3>
                    <!-- <p class="price">category</p> -->
                    <span class="double-border"></span>
                  </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Content-->


<?php include $tpl . 'footer.php'; ?>
<?php include $tpl . 'js.php';?>
<?php include $tpl . 'end.php'; ?>