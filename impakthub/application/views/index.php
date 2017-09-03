<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset='utf-8' />
<meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>IMPAKTHUB</title>
<?php include('template/head.php'); ?>
<link href="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>js/animate.css" rel="stylesheet" type="text/css" /> 
<script>
$(function() {
	var $window           = $(window),
	win_height_padded = $window.height() * 1.1,
	isTouch           = Modernizr.touch;
	if (isTouch) { $('.revealOnScroll').addClass('animated'); }
	$window.on('scroll', revealOnScroll);

	function revealOnScroll() {
		var scrolled = $window.scrollTop(),
			win_height_padded = $window.height() * 1.1;

		// Showed...
		$(".revealOnScroll:not(.animated)").each(function () {
		  var $this     = $(this),
			  offsetTop = $this.offset().top;

		  if (scrolled + win_height_padded > offsetTop) {
			if ($this.data('timeout')) {
			  window.setTimeout(function(){
				$this.addClass('animated ' + $this.data('animation'));
			  }, parseInt($this.data('timeout'),10));
			} else {
			  $this.addClass('animated ' + $this.data('animation'));
			}
		  }
		});
		// Hidden...
		$(".revealOnScroll.animated").each(function (index) {
		  var $this     = $(this),
			  offsetTop = $this.offset().top;
		  if (scrolled + win_height_padded < offsetTop) {
			$(this).removeClass('animated fadeInUp flipInX lightSpeedIn')
		  }
		});
	}
	revealOnScroll();
});
</script>
<script src="https://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>
</head>

<body>
<div id="header">
	<?php include('template/header.php'); ?>
</div>
<!---------Home  Banner----------->
<div id="banner">
	<ul id="demo2">
		<li>
			<img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/banner.jpg"/>
			<div class="slide-desc">
				<h2>Simplifying Social Responsibility to make Big Impact</h2>
				<p><a href='<iframe width="560" height="315" src="https://www.youtube.com/embed/lsKGgbOk2IM" frameborder="0" allowfullscreen></iframe>' class="download fancybox" rel="group1">Click to See how it works</a></p>
			</div>
		</li>
		<li>
			<img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/banner.jpg"/>
			<div class="slide-desc">
				<h2>Simplifying Social Responsibility to make Big Impact</h2>
				<p><a href='<iframe width="560" height="315" src="https://www.youtube.com/embed/lsKGgbOk2IM" frameborder="0" allowfullscreen></iframe>' class="download fancybox" rel="group1">Click to See how it works</a></p>
			</div>
		</li>
	</ul>
</div>
<!---------About Us Text----------->
<div id="outer1" >
	<div class="container">
		<h2 class="revealOnScroll" data-animation="fadeIn" data-timeout="400">Who We are?
			<div class="divider"></div>
		</h2>
		<p  class="revealOnScroll" data-animation="fadeIn" data-timeout="600">We are a bunch of professional, but slightly crazy people who are passionate about doing good to the world. We want to do this by bringing method to madness in the field of social funding by making it so simple, transparent, accountable and efficient that more and more organisations and people participate with surety and absolute peace of mind, creating a transformational social movement.</p>
		<div id="about_right"  class="revealOnScroll" data-animation="fadeInUp" data-timeout="800"><a href="<?php echo SITE_URL;?>team"><span></span>Know More</a></div>
	</div>
</div>
<!---------Why Choose ImpaktHub----------->
<div id="outer2">
	<div class="container">
		<h2 class="revealOnScroll" data-animation="fadeIn" data-timeout="1000">Why Choose ImpaktHub
		  <div class="divider"></div>
		</h2>
		<p class="revealOnScroll" data-animation="fadeInUp" data-timeout="1200">We, at ImpaktHub, are convinced that for real transformation to happen, it is imperative to work towards building more value into the whole ecosystem and for all stakeholders, rather than indulge in the arena in bits and pieces.</p>
		<p class="revealOnScroll" data-animation="fadeInUp" data-timeout="1400"> We also believe that controlling, structuring and improving the quality of input and processes guarantees the quality, efficiency, scalability and impact of output. </p>
		<p class="revealOnScroll" data-animation="fadeInUp" data-timeout="1600"> Thus, IH strives to bring together the latest and the best practices from the corporate and developmental world into all the work that we do. </p>
		<div id="horizontalTab">
		  <ul class="resp-tabs-list revealOnScroll" data-animation="fadeInUp" data-timeout="400">
			<a href="<?php echo SITE_URL;?>custom_designed_projects"><li>Custom Designed Projects</li></a>
			<a href="<?php echo SITE_URL;?>curated_project_marketplace"><li class="sec">Curated Project Marketplace</li></a>
			<a href="<?php echo SITE_URL;?>analytics_brand_impact_assurance"><li class="thd">Analytics, Brand & Impact Assurance</li></a>
		  </ul>
		  <div class="resp-tabs-container ">
			<div>
			  <div class="f1_container revealOnScroll" data-animation="fadeInUp" data-timeout="400">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5>Strategy & Sustainability Roadmap</h5>
				  </div>
				  <div class="back face center">
					<p>Think Long-run and run for long <a href="custom.html" class="view_more1">Read More</a></p>
				  </div>
				</div>
			  </div>
			  <div class="f1_container revealOnScroll" data-animation="fadeInUp" data-timeout="400">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5  class=" sub_icon5">Need Assessment & Shared Value based Design</h5>
				  </div>
				  <div class="back face center">
					<p>We will find what you want and design it for you <a href="custom.html" class="view_more1">Read More</a></p>
				  </div>
				</div>
			  </div>
			  <div class="f1_container revealOnScroll" data-animation="fadeInUp" data-timeout="400">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5  class=" sub_icon3">End to end CSR management</h5>
				  </div>
				  <div class="back face center">
					<p>Sit back and relax and let us manage your CSR opportunities <a href="custom.html" class="view_more1">Read More</a></p>
				  </div>
				</div>
			  </div>
			  <div class="f1_container revealOnScroll" data-animation="fadeInUp" data-timeout="600">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5 class=" sub_icon1">Real time tracking, reporting & Auditing</h5>
				  </div>
				  <div class="back face center">
					<p>Impactful and intelligent verified reports on your screen<a href="custom.html" class="view_more1">Read More</a></p>
				  </div>
				</div>
			  </div>
			  <div class="f1_container revealOnScroll" data-animation="fadeInUp" data-timeout="600">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5  class=" sub_icon4">Legal, Tax & Statutory Compliance</h5>
				  </div>
				  <div class="back face center">
					<p>Leave worries about lawyers and compliances to us <a href="custom.html" class="view_more1">Read More</a></p>
				  </div>
				</div>
			  </div>
			  <div class="f1_container revealOnScroll" data-animation="fadeInUp" data-timeout="600">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5 class=" sub_icon2">Fund Management</h5>
				  </div>
				  <div class="back face center">
					<p>We will manage your funds as carefully as our own <a href="custom.html" class="view_more1">Read More</a></p>
				  </div>
				</div>
			  </div>
			</div>
			<div>
			  <div class="f1_container case1 revealOnScroll" data-animation="fadeInUp" data-timeout="400">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5  class=" sub_icon13">Rating Approved Implementing Partners</h5>
				  </div>
				  <div class="back face center">
					<p>We mine diamonds and polish them as well <a href="curated.html" class="view_more2">Read More</a></p>
				  </div>
				</div>
			  </div>
			  <div class="f1_container case1 revealOnScroll" data-animation="fadeInUp" data-timeout="400">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5 class=" sub_icon14">Curated Projects</h5>
				  </div>
				  <div class="back face center">
					<p>Quality is our guarantee and commitment <a href="curated.html" class="view_more2">Read More</a></p>
				  </div>
				</div>
			  </div>
			  <div class="f1_container case1 revealOnScroll" data-animation="fadeInUp" data-timeout="400">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5 class=" sub_icon18">OECD and UN SDGs Aligned Work Areas </h5>
				  </div>
				  <div class="back face center">
					<p>Think Global agenda take Local action <a href="curated.html" class="view_more2">Read More</a></p>
				  </div>
				</div>
			  </div>
			  <div class="f1_container case1 revealOnScroll" data-animation="fadeInUp" data-timeout="600">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5  class=" sub_icon16">Online tracking, monitoring & reporting</h5>
				  </div>
				  <div class="back face center">
					<p>Our technology platform and you – made for each other <a href="curated.html" class="view_more2">Read More</a></p>
				  </div>
				</div>
			  </div>
			  <div class="f1_container case1 revealOnScroll" data-animation="fadeInUp" data-timeout="600">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5  class=" sub_icon15">Dashboard & Analytics</h5>
				  </div>
				  <div class="back face center">
					<p>Data on your fingertip <a href="curated.html" class="view_more2">Read More</a></p>
				  </div>
				</div>
			  </div>
			  <div class="f1_container case1 revealOnScroll" data-animation="fadeInUp" data-timeout="600">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5  class=" sub_icon17">Single Window Management </h5>
				  </div>
				  <div class="back face center">
					<p>One window for all the views <a href="curated.html" class="view_more2">Read More</a></p>
				  </div>
				</div>
			  </div>
			</div>
			<div>
			  <div class="f1_container case2 revealOnScroll" data-animation="fadeInUp" data-timeout="400">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5  class=" sub_icon7">Impact, Sustainability & Proprietary Performance Analytics</h5>
				  </div>
				  <div class="back face center">
					<p>We measure performance and impact like nobody does <a href="analytics.html" class="view_more3">Read More</a></p>
				  </div>
				</div>
			  </div>
			  <div class="f1_container case2  revealOnScroll" data-animation="fadeInUp" data-timeout="400">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5 class=" sub_icon9">Impact & Sustainability Communication</h5>
				  </div>
				  <div class="back face center">
					<p>Making your work known to the world <a href="analytics.html" class="view_more3">Read More</a></p>
				  </div>
				</div>
			  </div>
			  <div class="f1_container case2 revealOnScroll" data-animation="fadeInUp" data-timeout="400">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5 class=" sub_icon8">Shared Prosperity</h5>
				  </div>
				  <div class="back face center">
					<p>Win-win for all stakeholders <a href="analytics.html" class="view_more3">Read More</a></p>
				  </div>
				</div>
			  </div>
			  <div class="f1_container case2 revealOnScroll" data-animation="fadeInUp" data-timeout="600">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5  class=" sub_icon12">Employee Engagement</h5>
				  </div>
				  <div class="back face center">
					<p>Amplify your social cause by involving employees <a href="analytics.html" class="view_more3">Read More</a></p>
				  </div>
				</div>
			  </div>
			  <div class="f1_container case2 revealOnScroll" data-animation="fadeInUp" data-timeout="600">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5  class=" sub_icon10">Government Interface</h5>
				  </div>
				  <div class="back face center">
					<p>Is my priority also Government priority <a href="analytics.html" class="view_more3">Read More</a></p>
				  </div>
				</div>
			  </div>
			  <div class="f1_container case2 revealOnScroll" data-animation="fadeInUp" data-timeout="600">
				<div  class="f1_card shadow">
				  <div class="front face">
					<h5  class=" sub_icon11">Capacity Building & Skill Development</h5>
				  </div>
				  <div class="back face center">
					<p>Making implementers strong and efficient <a href="analytics.html" class="view_more3">Read More</a></p>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</div>
</div>
<!---------Online Automated Platform ----------->
<div id="outer4">
  <div class="container spec">
    <h2 class="revealOnScroll" data-animation="fadeInUp" data-timeout="400">Online Automated Platform
      <div class="divider"></div>
    </h2>
    <ul>
      <li  class="revealOnScroll" data-animation="fadeInUp" data-timeout="600">
        <div class="spec_image"><img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/f1.png"  /></div>
        <div class="right_div">
          <h6>NGO Ratings</h6>
          <p>Only the best implementers’ find place on our platform</p>
        </div>
      </li>
      <li  class="revealOnScroll" data-animation="fadeInUp" data-timeout="800">
        <div class="spec_image"><img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/f2.png"  /></div>
        <div class="right_div">
          <h6>Curated Project</h6>
          <p>All projects are closely vetted and monitored for maximum impact</p>
        </div>
      </li>
      <li class="rgt revealOnScroll" data-animation="fadeInUp" data-timeout="1000">
        <div class="spec_image"><img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/f5.png"  /></div>
        <div class="right_div">
          <h6>Single Window Management</h6>
          <p>Manage and track all your projects at a single place</p>
        </div>
      </li>
      <li  class="revealOnScroll" data-animation="fadeInUp" data-timeout="1200">
        <div class="spec_image"><img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/f4.png"  /></div>
        <div class="right_div">
          <h6>Real Time Monitoring</h6>
          <p>Keep a real-time check on the progress of the project</p>
        </div>
      </li>
      <li  class="revealOnScroll" data-animation="fadeInUp" data-timeout="1400">
        <div class="spec_image"><img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/f6.png"  /></div>
        <div class="right_div">
          <h6>Work Verification</h6>
          <p>Real time verification of all the work done in your projects</p>
        </div>
      </li>
      <li class="rgt revealOnScroll" data-animation="fadeInUp" data-timeout="1600">
        <div class="spec_image"><img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/f3.png"  /></div>
        <div class="right_div">
          <h6>Interactive Dashboards</h6>
          <p>All the information at your fingertips, transparently and completely</p>
        </div>
      </li>
    </ul>
  </div>
</div>
<!---------Project Offerings----------->
<div id="outer5">
  <div class="container">
    <h2  class="revealOnScroll" data-animation="fadeInUp" data-timeout="400">Project Offerings
      <div class="divider"></div>
    </h2>
    <p  class="revealOnScroll" data-animation="fadeInUp" data-timeout="600">Choose from a large collection of quality projects from only the best implementation partners that pass our stringent rating criteria. These projects are specifically designed keeping in mind the class of fund providers and can be filtered across many parameters.</p>
    <div class="flip"> <img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/pro1.jpg"  class="image" ><span>Corporate Social Responsibility</span>
      <div class="overlay">
        <div class="text"> <a href="custom.html" class="view_more">Custom Designed Projects
          <div class="view_more_detail">Need based design for maximum impact & sustenance</div>
          </a> <a href="curated.html" class="view_more" >Curated Projects Marketplace
          <div class="view_more_detail">Pre-vetted projects across sectors & geographies</div>
          </a> </div>
      </div>
    </div>
    <div class="flip"> <img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/pro3.jpg"  class="image" ><span>Crowd Funding</span>
      <div class="overlay">
        <div class="text"> <a href="curated.html" class="view_more" >Curated Projects Marketplace
          <div class="view_more_detail">Pre-vetted projects across sectors & geographies</div>
          </a> <a href="" class="view_more" >Topical Causes
          <div class="view_more_detail">Pre-vetted projects on the major topical issues of the day</div>
          </a></div>
      </div>
    </div>
    <div class="flip"> <img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/pro2.jpg"  class="image" ><span>Government</span>
      <div class="overlay">
        <div class="text"> <a href="custom.html" class="view_more">Custom Designed Projects
          <div class="view_more_detail">Need based design for maximum impact & sustenance</div>
          </a> <a href="curated.html" class="view_more" >Curated Projects Marketplace
          <div class="view_more_detail">Pre-vetted projects across sectors & geographies</div>
          </a> </div>
      </div>
    </div>
    <div class="flip"> <img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/pro4.jpg"  class="image" ><span>Development Agencies</span>
      <div class="overlay">
        <div class="text"> <a href="custom.html" class="view_more">Custom Designed Projects
          <div class="view_more_detail">Need based design for maximum impact & sustenance</div>
          </a> <a href="curated.html" class="view_more" >Curated Projects Marketplace
          <div class="view_more_detail">Pre-vetted projects across sectors & geographies</div>
          </a></div>
      </div>
    </div>
  </div>
</div>
<!---------Testimonials----------->  
<div id="outer3" >
  <div class="container">
    <div id="fac_box"  class="revealOnScroll" data-animation="fadeInUp" data-timeout="600">
      <div class="item">
        <ul id="content-slider" class="content-slider">
          <li>
            <p>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ”</p>
            <div class="tstml"><img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/testm_icon.png" /></div>
            <h3>Mr. XYZ Alphabet</h3>
            <p>CSR Manager, Tata Technologies</p>
          </li>
          <li>
            <h3>2</h3>
          </li>
          <li>
            <p>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ”</p>
            <div class="tstml"><img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/testm_icon.png" /></div>
            <h3>Mr. XYZ Alphabet</h3>
            <p>CSR Manager, Tata Technologies</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!---------Our Partner in Success----------->  
<div id="outer6">
  <div class="container">
    <h2  class="revealOnScroll" data-animation="fadeInUp" data-timeout="400">Our Partner in Success
      <div class="divider"></div>
    </h2>
    <ul id="flexiselDemo3"  class="revealOnScroll" data-animation="fadeInUp" data-timeout="600">
      <li>
        <div class="client"><img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/client1.jpg" /></div>
      </li>
      <li>
        <div class="client"><img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/client2.jpg" /></div>
      </li>
      <li>
        <div class="client"><img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/client3.jpg" /></div>
      </li>
      <li>
        <div class="client"><img src="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>images/client4.jpg" /></div>
      </li>
    </ul>
  </div>
</div>
<div id="footer">
	<?php include('template/footer.php'); ?>
</div>

<script type="text/javascript">
$(window).load(function() {
    $("#flexiselDemo3").flexisel({
        visibleItems: 5,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:769,
                visibleItems: 3
            }
        }
    }); 
});
</script>
</body>
</html>
