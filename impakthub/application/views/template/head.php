
<link href="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>/js/menumaker.css">
<script  src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>/js/jquery-1.7.1.min.js"></script>
<script src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>/js/skdslider.min.js"></script>
<link href="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>/js/skdslider.css" rel="stylesheet" />
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#demo2').skdslider({'delay':5000, 'animationSpeed': 1000,'showNextPrev':true,'showPlayButton':false,'autoSlide':true,'animationType':'sliding'});
	jQuery('#responsive').change(function(){
	  $('#responsive_wrapper').width(jQuery(this).val());
	});
});
</script>
<link rel="stylesheet" href="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>/js/easy-responsive-tabs.css" />
<script src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>/js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
		activate: function(event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#tabInfo');
			var $name = $('span', $info);
			$name.text($tab.text());
			$info.show();
			}
	});
});
</script>
<link rel="stylesheet"  href="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>/js/lightslider.css"/>
<script src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>/js/lightslider.js"></script>
<script>
	 $(document).ready(function() {
		$("#content-slider").lightSlider({
			loop:true,
			keyPress:true
		});
		$('#image-gallery').lightSlider({
			gallery:true,
			item:1,
			thumbItem:9,
			slideMargin: 0,
			speed:500,
			auto:true,
			loop:true,
			onSliderLoad: function() {
				$('#image-gallery').removeClass('cS-hidden');
			}  
		});
	});
</script>
<link href="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>/js/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>/js/jquery.flexisel.js"></script>
<script>
	$(function(){
	$(".icon.sear").click(function(e){
	 	$(".search").show();
		e.preventDefault();
		e.stopPropagation();
	});
	$('.icon.sear').dblclick(function(){
		$(".search").hide();
	});});
</script>
<link rel="stylesheet" href="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>/fancybox/jquery.fancybox.css">
<script src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
<script src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>/js/classie.js"></script>
<script>
function init() {
	window.addEventListener('scroll', function(e){
		var distanceY = window.pageYOffset || document.documentElement.scrollTop,
			shrinkOn = 350,
			header = document.querySelector("#header");
		if (distanceY > shrinkOn) {
			classie.add(header,"smaller");
		} else {
			if (classie.has(header,"smaller")) {
				classie.remove(header,"smaller");
			}
		}
	});
}
window.onload = init();
</script>