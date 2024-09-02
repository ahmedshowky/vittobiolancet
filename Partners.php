<?php $pageTitle = 'Partners'; ?>
<?php include 'init.php'; ?>

<!--Start Banner-->
<div class="sub-banner">
  <img class="banner-img" src="<?php echo $img; ?>sub-banner3.jpg" alt="">
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
<div class="container">
    <img 
</div>
</div>
<!--End Content-->


<?php include $tpl . 'footer.php'; ?>
<?php include $tpl . 'js.php';?>
<script>
      $(document).ready(function() {
        $('.fancybox-media').fancybox({
          openEffect  : 'none',
          closeEffect : 'none',
          helpers : {
            media : {}
          }
        });
      });
    </script>

<?php include $tpl . 'end.php'; ?>