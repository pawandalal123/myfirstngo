<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset='utf-8' />
	<meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>IMPAKTHUB</title>
	<?php include('template/head.php'); ?>
	<link href="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>js/animate.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
<div id="header">
	<?php include('template/header.php'); ?>
</div>

<div id="outer7">
	<div class="container">
		<div id="breadcrumb"><a href="#">Home</a> > <a href="#">Our Solutions</a> > <a href="#" class="active">Curated Automated Online Platform</a></div>
		<h2>NGO<div class="divider"></div></h2>
		<div id="box8">
		<?php  if( $this->session->userdata('msg') ) {?>
<span class="<?php echo $this->session->userdata('class');?>"> <?php echo $this->session->userdata('msg');?></span>
 <?php $this->session->unset_userdata('msg');}?>
			<p class="note1">One of the biggest challenges faced by fund providers today is to evaluate the quality of their implementation partner (i.e., NGOs), due to a dearth in availability of accurate information. ImpaktHub provides a one-stop resolution to this challenge by conducting an extremely stringent and scientific rating of NGOs based on pre-defined parameters.</p>
			<input type="hidden" name="productcounter" value="2">
			<form action="" method="post">
			<div class="box10">
				<div id="stage">
					<ul>
						<li><a href="<?php echo SITE_URL?>corporate/registration_step1 ?>" class="complete"><span>1</span>Company Detail</a></li>
						<li><a href="<?php echo SITE_URL?>corporate/registration_step2 ?>" class="complete"><span>2</span>section</a></li>
						<li><a href="<?php echo SITE_URL?>corporate/registration_step3 ?>" class="complete"><span>3</span>section</a></li>
						<li><a href="#" id="last" class="active_last"><span>4</span>Section</a></li>
					</ul>
				</div>
				<ul>
				<div class="tablefeild">
					<li class="red2">Contact Person 1*</li>
					<li class="half">
						<label>Name</label>
						<input type="text" value=""  name="name[]"/>
					</li>
					<li class="half rgt">
						<label>Designation</label>
						<input type="text" value=""  name="designation[]"/>
					</li>
					<li class="half cl">
						<label>Email</label>
						<input type="text" value=""  name="email[]"/>
					</li>
					<li  class="half rgt">
						<label>Phone</label>
						<input type="text" value=""  name="phone[]"/>
					</li>
					</div>
					<li  class="half rgt">
						<!-- <label></label> -->
						<a class="addmore">Addmore</a>
					</li>
					
					<li><input type="submit" name="savestepfour" value="SUBMIT" class="submit"></li>
				</ul>
			</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function()
	{
		var counter=2;
		$('.addmore').click(function()
		{
			var html='<div class="tablefeild"><li class="red2">Contact Person '+counter+'*</li><li class="half"><label>Name</label><input type="text" value=""  name="name[]"/></li><li class="half rgt"><label>Designation</label><input type="text" value=""  name="designation[]"/></li><li class="half cl"><label>Email</label><input type="text" value=""  name="email[]"/></li><li  class="half rgt"><label>Phone</label><input type="text" value=""  name="phone[]"/></li></div>';
            $('.tablefeild:last').after(html);
			counter++;
			//alert(counter);

		})

	});
</script>
<div id="footer" class="inner">
	<?php include('template/footer.php'); ?>
</div>
</body>
</html>
