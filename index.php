<?php $pageTitle = 'Home'; ?>
<?php include 'init.php'; ?>


<div class="container">
  <div class="time-table-sec">
    <ul id="accordion2" class="accordion2">
      <li>
        <ul class="submenu time-table">
          <li class="tit">
            <h5>Working Time</h5>
          </li>
          <li><span class="day">Saturday - Thursday</span> <span class="divider">-</span> <span class="time">8.00 - 16.00</span></li>
          <li><span class="day">Friday </span> <span class="divider">-</span> <span class="time">Week End</span></li>
        </ul>
        <div class="link"><img class="time-tab" src="<?php echo $img; ?>timetable-menu.png" alt=""></div>
      </li>
    </ul>
  </div>
</div>
<!--Start Banner-->
<div class="tp-banner-container">
  <div class="tp-banner" >
    <ul>
      <!-- SLIDE  -->
      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
        <!-- MAIN IMAGE -->
        <img src="<?php echo $img; ?>slides/1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
      </li>
      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
        <!-- MAIN IMAGE -->
        <img src="<?php echo $img; ?>slides/2.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
      </li>
      <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">
        <!-- MAIN IMAGE -->
        <img src="<?php echo $img; ?>slides/3.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
      </li>
      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
        <!-- MAIN IMAGE -->
        <img src="<?php echo $img; ?>slides/4.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
      </li>
      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
        <!-- MAIN IMAGE -->
        <img src="<?php echo $img; ?>slides/5.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
      </li>
      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
        <!-- MAIN IMAGE -->
        <img src="<?php echo $img; ?>slides/6.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
      </li>
      <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">
        <!-- MAIN IMAGE -->
        <img src="<?php echo $img; ?>slides/7.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
      </li>
    </ul>
    <div class="tp-bannertimer"></div>
  </div>
</div>
<!--End Banner-->

<!--Start Doctor Quote-->
<div class="dr-quote">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <span class="quote">Premium green feed additives for optimal productivity</span>
        </div>
    </div>
  </div>
</div>
<!--End Doctor Quote-->


<!--Start Content-->
<div class="content">
  <!--Start Welcome-->
  <div class="welcome-two dark-back">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="main-title">
            <h2><span>Welcome to</span> <mark>BioLancet</mark> </h2>
          </div>
        </div>
      </div>
      <div class="welcome-detail">
        <div class="row">
          <div class="col-md-5">
            <img src="<?php echo $img; ?>welcome-img.jpg" alt="">
          </div>
          <div class="col-md-7">
            <div class="detail">
              <p>
              Biolancet is a fast growing limited liability company specialized in feed additives manufacturing.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End Welcome-->
</div>
<!--End Content-->


<?php include $tpl . 'footer.php'; ?>
<?php include $tpl . 'js.php';?>

<!-- START REVOLUTION SLIDER -->	
<script src="<?php echo $js; ?>jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo $js; ?>jquery.themepunch.tools.min.js"></script>
<script>
  jQuery(document).ready(function() {	
  	jQuery('.tp-banner').show().revolution({
  		dottedOverlay:"none",
  		delay:4000,
  		startwidth:1170,
  		startheight:450,
  		hideThumbs:200,
  		
  		thumbWidth:100,
  		thumbHeight:50,
  		thumbAmount:5,
  		
  		navigationType:"bullet",
  		navigationArrows:"solo",
  		navigationStyle:"preview4",
  		
  		touchenabled:"on",
  		onHoverStop:"off",
  		
  		swipe_velocity: 0.7,
  		swipe_min_touches: 1,
  		swipe_max_touches: 1,
  		drag_block_vertical: false,
  								
			parallax:"mouse",
  		parallaxBgFreeze:"on",
  		parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
  								
  		keyboardNavigation:"on",
  		
  		navigationHAlign:"center",
  		navigationVAlign:"bottom",
  		navigationHOffset:0,
  		navigationVOffset:20,
  
  		soloArrowLeftHalign:"left",
  		soloArrowLeftValign:"center",
  		soloArrowLeftHOffset:20,
  		soloArrowLeftVOffset:0,
  
  		soloArrowRightHalign:"right",
  		soloArrowRightValign:"center",
  		soloArrowRightHOffset:20,
  		soloArrowRightVOffset:0,
  				
  		shadow:0,
  		fullWidth:"on",
  		fullScreen:"off",
  
  		spinner:"spinner4",
  		
  		stopLoop:"off",
  		stopAfterLoops:-1,
  		stopAtSlide:-1,
  
  		shuffle:"off",
  		
  		autoHeight:"off",						
  		forceFullWidth:"off",						
  								
  		hideThumbsOnMobile:"off",
  		hideNavDelayOnMobile:1500,						
  		hideBulletsOnMobile:"off",
  		hideArrowsOnMobile:"off",
  		hideThumbsUnderResolution:0,
  		
  		hideSliderAtLimit:0,
  		hideCaptionAtLimit:0,
  		hideAllCaptionAtLilmit:0,
  		startWithSlide:0,
  		videoJsPath:"rs-plugin/videojs/",
  		fullScreenOffsetContainer: ""	
  	});		
  });	//ready
</script>


<?php include $tpl . 'end.php'; ?>