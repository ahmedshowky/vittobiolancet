<?php $pageTitle = 'Products'; ?>
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
  <!--Start Products-->
  <div class="gallery">
    <!--Start Team Detail-->
    <div class="cbp-panel" style="max-width:1170px;">
      <div id="filters-container" class="cbp-l-filters-list ">
        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item cbp-l-filters-list-first">All Partners </div>
        <div data-filter=".technology" class="cbp-filter-item">Feed Additives</div>
        <div data-filter=".facilities" class="cbp-filter-item">Medicine Applicators</div>
        <div data-filter=".dental" class="cbp-filter-item">Veterinary Diagnostics</div>
        <div data-filter=".kids" class="cbp-filter-item cbp-l-filters-list-last">Human Diagnostics</div>
      </div>
      <div id="grid-container4" class="cbp main-gallery">
        <div class="cbp-item technology">
          <a href="http://www.difagri.fr/?site=en" target="_blank" class="gallery-sec">
            <div class="image-hover img-layer-slide-left-right">
              <img src="<?php echo $img; ?>partners/7.png" class="img-responsive" alt="">
            </div>
            <div class="detail">
              <h6>Difagri</h6>
              <span>France</span>
            </div>
          </a>
        </div>
        <div class="cbp-item technology">
          <a href="http://www.daeho.com/eng/index.html" target="_blank" class="gallery-sec">
            <div class="image-hover img-layer-slide-left-right">
              <img src="<?php echo $img; ?>partners/1.png" alt="">
            </div>
            <div class="detail">
              <h6>Daeho</h6>
              <span>South Korea</span>
            </div>
          </a>
        </div>
        <div class="cbp-item facilities">
          <a href="https://www.henkesasswolf.de/" target="_blank" class="gallery-sec">
            <div class="image-hover img-layer-slide-left-right">
              <img src="<?php echo $img; ?>partners/10.png" alt="">
            </div>
            <div class="detail">
              <h6>Henke Sass Wolf</h6>
              <span>Germany</span>
            </div>
          </a>
        </div>
        <div class="cbp-item facilities">
          <a href="https://www.meddit.nl/vetart/" target="_blank" class="gallery-sec">
            <div class="image-hover img-layer-slide-left-right">
              <img src="<?php echo $img; ?>partners/8.png" alt="">
            </div>
            <div class="detail">
              <h6>Meddit</h6>
              <span>Netherlands</span>
            </div>
          </a>
        </div>
        <div class="cbp-item dental">
          <a href="https://en.fassisi.de/" target="_blank" class="gallery-sec">
            <div class="image-hover img-layer-slide-left-right">
              <img src="<?php echo $img; ?>partners/2.png" alt="">
            </div>
            <div class="detail">
              <h6>Fassisi</h6>
              <span>Germany</span>
            </div>
          </a>
        </div>
        <div class="cbp-item dental">
          <a href="http://www.dficare.com/" target="_blank" class="gallery-sec">
            <div class="image-hover img-layer-slide-left-right">
              <img src="<?php echo $img; ?>partners/4.png" alt="">
            </div>
            <div class="detail">
              <h6>DFI</h6>
              <span>South Korea</span>
            </div>
          </a>
        </div>
        <div class="cbp-item dental">
          <a href="http://www.mediandiagnostics.com/eng/" target="_blank" class="gallery-sec">
            <div class="image-hover img-layer-slide-left-right">
              <img src="<?php echo $img; ?>partners/3.png" alt="">
            </div>
            <div class="detail">
              <h6>Median Diagnostics Inc.</h6>
              <span>South Korea</span>
            </div>
          </a>
        </div>
        <div class="cbp-item dental">
          <a href="http://en.bionote.co.kr/" target="_blank" class="gallery-sec">
            <div class="image-hover img-layer-slide-left-right">
              <img src="<?php echo $img; ?>partners/6.png" alt="">
            </div>
            <div class="detail">
              <h6>Bionote</h6>
              <span>South Korea</span>
            </div>
          </a>
        </div>
        <div class="cbp-item kids">
          <a href="http://rapigen-inc.com/wp/?lang=en" target="_blank" class="gallery-sec">
            <div class="image-hover img-layer-slide-left-right">
              <img src="<?php echo $img; ?>partners/5.png" alt="">
            </div>
            <div class="detail">
              <h6>RapiGEn Inc.</h6>
              <span>South Korea</span>
            </div>
          </a>
        </div>
        <div class="cbp-item kids">
          <a href="http://www.asanpharm.com/" target="_blank" class="gallery-sec">
            <div class="image-hover img-layer-slide-left-right">
              <img src="<?php echo $img; ?>partners/9.png" alt="">
            </div>
            <div class="detail">
              <h6>ASAN</h6>
              <span>South Korea</span>
            </div>
          </a>
        </div>
      </div>
    </div>
    <!--End Team Detail-->
  </div>
  <!--End Partners-->
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