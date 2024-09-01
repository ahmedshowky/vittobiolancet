<?php $pageTitle = 'Blank'; ?>
<?php include 'init.php'; ?>

<!--Start Banner-->
<div class="sub-banner">
  <img class="banner-img" src="<?php echo $img; ?>sub-banner.jpg" alt="">
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


<?php include $tpl . 'footer.php'; ?>
<?php include $tpl . 'js.php';?>
<?php include $tpl . 'end.php'; ?>