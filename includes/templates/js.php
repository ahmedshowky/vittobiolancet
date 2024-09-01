<script src="<?php echo $js; ?>jquery.js"></script>
<!-- SMOOTH SCROLL -->	
<script src="<?php echo $js; ?>scroll-desktop.js"></script>
<script src="<?php echo $js; ?>scroll-desktop-smooth.js"></script>
<!-- START REVOLUTION SLIDER -->	
<script src="<?php echo $js; ?>jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo $js; ?>jquery.themepunch.tools.min.js"></script>
<!-- Date Picker and input hover -->
<script src="<?php echo $js; ?>classie.js"></script> 
<script src="<?php echo $js; ?>jquery-ui-1.10.3.custom.js"></script>
<script src="<?php echo $js; ?>jquery.fancybox.js"></script> 
<script src="<?php echo $js; ?>jquery.fancybox-media.js"></script>
<!-- Gallery Portfolio -->  
<script src="<?php echo $js; ?>jquery.cubeportfolio.min.js"></script>
<script src="<?php echo $js; ?>main.js"></script>
<!-- Welcome Tabs -->	
<script src="<?php echo $js; ?>tabs.js"></script>
<!-- All Carousel -->
<script src="<?php echo $js; ?>owl.carousel.js"></script>
<!-- Mobile Menu -->
<script src="<?php echo $js; ?>jquery.mmenu.min.all.js"></script>
<!-- All Scripts -->
<script src="<?php echo $js; ?>custom.js"></script>
<script>
	$(document).ready(function() {
	 	// Get current page URL
	 	var url = window.location.href;
	 	// remove # from URL
	 	url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
	 	// remove parameters from URL
	 	url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
	 	// select file name
	 	url = url.substr(url.lastIndexOf("/") + 1);
	 	// If file name not avilable
	 	if(url == ''){url = 'index.php';}
	 	// Loop all menu items
	 	$('nav li').each(function(){
	  	// select href
	  	var href = $(this).find('a').attr('href');
	  	// Check filename
	  	if(url == href){
	   		// Add active class
	   		$(this).addClass('item-select');
	   	}
	 	});
	});
</script>