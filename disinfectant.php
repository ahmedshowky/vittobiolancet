<?php $pageTitle = 'Disinfectant'; ?>
<?php include 'init.php'; ?>

<!--Start Banner-->
<div class="sub-banner">
  <img class="banner-img" src="<?php echo $img; ?>sub-banner8.jpg" alt="">
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
                  <a><img src="<?php echo $img; ?>products/feed-additives/Difacid-150.jpg" alt=""></a>
                </div>
                <div class="product-description clearfix">
                    <h3>Difacid 150</h3>
                    <span class="double-border"></span>
                  </div>
              </div>
            </li>
            <li>
              <div class="product">
                <div class="product-thumb">
                  <a><img src="<?php echo $img; ?>products/feed-additives/Safe-Cidal.jpg" alt=""></a>
                </div>
                <div class="product-description clearfix">
                    <h3>Safe Cidal</h3>
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