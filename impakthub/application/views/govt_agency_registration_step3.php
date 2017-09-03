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
		<h2>Government Agency <div class="divider"></div></h2>
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
						<li><a href="<?php echo SITE_URL;?>/Government_agency/registration_step1" class="complete"><span>1</span>Company Detail</a></li>
						<li><a href="<?php echo SITE_URL;?>/Government_agency/registration_step2" class="complete"><span>2</span>section</a></li>
						<li><a href="<?php echo SITE_URL;?>/Government_agency/registration_step3" class="active"><span>3</span>section</a></li>
						<li><a href="<?php echo SITE_URL;?>/Government_agency/registration_step4" class="complete" ><span>4</span>Section</a></li>
						<?php


					} 
					else
					{
						?>
						<li><a href="<?php echo SITE_URL; ?>Government_agency/registration_step1" class="complete"><span>1</span>Company Detail</a></li>
						<li><a href="<?php echo SITE_URL;?>/Government_agency/registration_step2" class="complete"><span>2</span>section</a></li>
						<li><a href="#" class="active"><span>3</span>section</a></li>
						<li><a href="#" id="last"><span>4</span>Section</a></li>
						<?php

					}
					?>
					</ul>
				</div>
				<ul>
					<li class="half">
						<label>Total Funds to be deployed</label>
						<select  name="dev_total_funds" >
							<option value="< 50 L"> < 50 L </option>
							<option value="50L to 2 Cr"> 50L to 2 Cr</option>
							<option value="2 cr  - 5Cr">2 cr  - 5Cr</option>
							<option value="5Cr and above">5Cr and above</option>
						</select>
					</li>
					<li class="half rgt">
						<label>Target No of Projects for funding</label>
						<input type="text" value="<?php echo  @$sessiondata->govt_no_of_proj ? @$sessiondata->govt_no_of_proj : set_value('dev_no_of_proj');?>"   name="dev_no_of_proj"/>
						<?php echo form_error('dev_no_of_proj')?>
					</li>
					<li class="half cl">
						<label>Geographical Area Preference</label>
						<input type="text" value="<?php echo  @$sessiondata->govt_geo_area ? @$sessiondata->govt_geo_area : set_value('geo_area');?>"   name="geo_area"/>
					</li>
					<li  class="half rgt">
						<label>&nbsp;</label>
						<input type="text" value=""  name="geo_area1"/>
					</li>
					<li  class="half">
						<label>NGO Years of exp preference</label>
						<select name="dev_ngo_exp" >
							<?php 
							for($i=1; $i<=10;$i++)
							{
								$selected='';
								if($sessiondata->govt_ngo_exp=$i)
								{
									$selected='selected';

								}
								echo '<option value='.$i.' '.$selected.'>'.$i.'</option>';
							}
							?>
						</select>
					</li>
					<li  class="half rgt">
						<label>NGO Size preference</label>
						<select name="dev_ngo_size" >
							<option value="small">Small</option>
							<option value="mid">Mid sized</option>
							<option value="large">Large</option>
							<option value="very large">Very large</option>
						</select>
					</li>
					<li  class="half">
						<label>Min amount for project</label>
						<input type="text" value="<?php echo  @$sessiondata->govt_min_amount ? @$sessiondata->govt_min_amount : set_value('dev_min_amount');?>"  name="dev_min_amount"/>
					</li>
					<li  class="half rgt">
						<label>Max amount for project</label>
						<input type="text" value="<?php echo  @$sessiondata->govt_max_amount ? @$sessiondata->govt_max_amount : set_value('dev_max_amount');?>"  name="dev_max_amount"/>
					</li>
					<li>
						<label>Target no of NGOs to be engaged </label>
						<input type="text" value="<?php echo  @$sessiondata->govt_no_of_ngo ? @$sessiondata->govt_no_of_ngo : set_value('dev_no_of_ngo');?>"  name="dev_no_of_ngo"/>
					</li>
					<li>
					<!-- <a href="form_development_agency_stage4.html" class="submit">NEXT</a> -->
					<input type="submit" name="savestepthree" value="NEXT" class="submit"></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="footer" class="inner">
	<?php include('template/footer.php'); ?>
</div>
</body>
</html>
