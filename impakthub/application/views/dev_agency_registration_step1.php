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
		<h2>Development Agency <div class="divider"></div></h2>
		<div id="box8">
			<p class="note1">One of the biggest challenges faced by fund providers today is to evaluate the quality of their implementation partner (i.e., NGOs), due to a dearth in availability of accurate information. ImpaktHub provides a one-stop resolution to this challenge by conducting an extremely stringent and scientific rating of NGOs based on pre-defined parameters.</p>
			<?php  if( $this->session->userdata('msg') ) {?>
<span class="<?php echo $this->session->userdata('class');?>"> <?php echo $this->session->userdata('msg');?></span>
 <?php $this->session->unset_userdata('msg');}?>
			<form action="" method="post">
			<div class="box10">
				<div id="stage">
					<ul>
					<?php
					if($sessiondata->status=='c')
					{
						?>
						<li><a href="<?php echo SITE_URL;?>/development_agency/registration_step1" class="active"><span>1</span>Company Detail</a></li>
						<li><a href="<?php echo SITE_URL;?>/development_agency/registration_step2" class="complete"><span>2</span>section</a></li>
						<li><a href="<?php echo SITE_URL;?>/development_agency/registration_step3" class="complete"><span>3</span>section</a></li>
						<li><a href="<?php echo SITE_URL;?>/development_agency/registration_step4" class="complete" ><span>4</span>Section</a></li>
						<?php


					} 
					else
					{
						?>
						<li><a href="#" class="active"><span>1</span>Company Detail</a></li>
						<li><a href="#"><span>2</span>section</a></li>
						<li><a href="#"><span>3</span>section</a></li>
						<li><a href="#" id="last"><span>4</span>Section</a></li>
						<?php

					}
					?>
						
					</ul>
				</div>
				<ul>
					<li>
						<label>Name of the Agency*</label>
						<input type="text" value="<?php echo  @$sessiondata->dev_department ? @$sessiondata->dev_department : set_value('dev_department');?>"  name="dev_department"/>
						<?php echo form_error('dev_department');?>
					</li>
					<li class="half">
						<label>Address*</label>
						<textarea type="text"   name="dev_address"><?php echo  @$sessiondata->dev_address ? @$sessiondata->dev_address : set_value('dev_address');?></textarea>
						<?php echo form_error('dev_address');?>
					</li>
					<li  class="half rgt">
						<label>State*</label>
						<input type="text" value="<?php echo  @$sessiondata->dev_state ? @$sessiondata->dev_state : set_value('dev_state');?>" name="dev_state" />
						<?php echo form_error('dev_state');?>
					</li>
					<li  class="half rgt">
						<label>City*</label>
						<input type="text" value="<?php echo  @$sessiondata->dev_city ? @$sessiondata->dev_city : set_value('dev_city');?>" name="dev_city" />
						<?php echo form_error('dev_city');?>
					</li>
					<li  class="half cl">
						<label>Website*</label>
						<input type="text" value="<?php echo  @$sessiondata->dev_website ? @$sessiondata->dev_website : set_value('dev_website');?>" name="dev_website"/>
					</li>
					<li  class="half rgt">
						<label>Sector</label>
						<input type="text" value="<?php echo  @$sessiondata->dev_sector ? @$sessiondata->dev_sector : set_value('dev_sector');?>" name="dev_sector"/>
					</li>
					<li>
						<label>Region</label>
						<input type="text" value="<?php echo  @$sessiondata->dev_region ? @$sessiondata->dev_region : set_value('dev_region');?>" name="dev_region"/>
					</li>
					<li>
					<!-- <a href="form_development_agency.html" class="submit">NEXT</a> -->
					<input type="submit" name="developersavestepone" value="NEXT" class="submit">
					</li>
				</ul>
			</div>
			</form>
		</div>
	</div>
</div>

<div id="footer" class="inner">
	<?php include('template/footer.php'); ?>
</div>
</body>
</html>
