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
		<h2>Individual <div class="divider"></div></h2>
		<div id="box8">
			<p class="note1">>One of the biggest challenges faced by fund providers today is to evaluate the quality of their implementation partner (i.e., NGOs), due to a dearth in availability of accurate information. ImpaktHub provides a one-stop resolution to this challenge by conducting an extremely stringent and scientific rating of NGOs based on pre-defined parameters.</p>
			<?php  if( $this->session->userdata('msg') ) {?>
<span class="<?php echo $this->session->userdata('class');?>"> <?php echo $this->session->userdata('msg');?></span>
 <?php $this->session->unset_userdata('msg');}?>
 <form action="" method="post">
			<div class="box10">
			<?php echo validation_errors(); ?>
				<ul>
					<li>
						<label>Name</label>
						<input type="text" value=""  name="name"/>
						<?php echo form_error('name');?>
					</li>
					<li class="half">
						<label>Address</label>
						<textarea type="text"  name="address"></textarea>
						<?php echo form_error('address');?>
					</li>
					<li  class="half rgt">
						<label>State</label>
						<input type="text" value="" name="state"/>
						<?php echo form_error('state');?>
					</li>
					<li  class="half rgt">
						<label>City</label>
						<input type="text" value="" name="city"/>
						<?php echo form_error('city');?>
					</li>
					<li>
						<label class="red">Nationality</label>
						<div class="sub_box"><input type="radio" class="red1" value="Indian" name="nationality" checked /> Resident Indian</div>
						<div class="sub_box">
						 <input type="radio" value="Nonindian"  class="red1"  name="nationality"/> Non Resident Indian</div>
						<div class="sub_box"> <input type="radio" value="Foreign"  class="red1"  name="nationality"/>Foreign</div>
					</li>
					<!-- <?php if(form_error('passport')!='') { ?> style="display: block" <?php} else{?> style="display: none" <?php }?> -->
					<li  class="half cl nonindian" style="display: none" >
						<label>If you are Non Resident Indian, Enter Passport Number</label>
						<input type="text" value=""  name="passport"/>
						<?php echo form_error('passport');?>
					</li>
					<li  class="half rgt foreign" style="display: none">
						<label>If you are Foreign, Enter Country</label>
						<input type="text" value="" name="country"/>
						<?php echo form_error('country');?>
					</li>
					<li  class="half cl">
						<label>Phone</label>
						<input type="text" value="" name="phone"/>
					</li>
					<li  class="half rgt">
						<label>Mobile</label>
						<input type="text" value="" name="mobile"/>
					</li>

					<li  class="half">
						<label>Email</label>
						<input type="text" value="" name="email"/>
					</li>
					<li  class="half rgt">
						<label>Areas/Causes of interest</label>
						<select name="interest" >
							<option value="Environment">Environment</option>
						</select>
					</li>
					<li>
						<label class="red">Would you like to Volunteer </label>
						<div class="sub_box"><input type="radio" class="red1" value="yes" name="vol" id="cor" checked /> Yes</div>
						<div class="sub_box"> <input type="radio" value="no"  class="red1"  name="vol"/> No</div>
					</li>
					<div id="box11" style="display: block;">
						<li  class="half">
							<label>Skills that you would like to volunteer</label>
							<select name="volunteer_skills">
								<option>Campaign Awarness</option>
								<option>Campaign Awarness</option>
								<option>Campaign Awarness</option>
							</select>
						</li>
						<li  class="half rgt">
							<label>No of hrs you would like to volunteer</label>
							<select name="volunteer_hours">
								<option value="1">1 Hours Daily</option>
								<option value="2">2 Hours Daily</option>
								<option value="3">3 Hours Daily</option>
								<option value="4">4 Hours Daily</option>
							</select>
						</li>
						<li>
							<label>Prefered Location of volunteering</label>
							<input type="text" value="" name="loction"/>
						</li>
						<li>
							<label>Previous Volunteering </label>
							<textarea type="text"  name="volunteering"></textarea>
						</li>
					</div>
					<!-- <li><a href="#" class="submit">SUBMIT</a> -->
					<input type="submit" name="saveform" value="Submit" class="submit">
					</li>
					<li>
						<a href="#" class="google">Login with Google</a>
						<a href="#" class="tw2">Login with Twitter</a>
						<a href="#" class="fb1">Login with Facebook</a>
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
<script type="text/javascript">
	$(document).ready(function()
	{
		$('input[name=vol]').click(function()
		{
			var valtype=$('input[name=vol]:checked').val();
			if(valtype=='yes')
			{
				$('#box11').show();

			}
			else
			{
				$('#box11').hide();

			}

		});

		$('input[name=nationality]').click(function()
		{
			var valtype=$('input[name=nationality]:checked').val();
			if(valtype=='Foreign')
			{
				$('.foreign').show();
				$('.nonindian').hide();

			}
			else if(valtype=='Nonindian')
			{
				$('.foreign').hide();
				$('.nonindian').show();
			

			}
			else
			{
				$('.foreign').hide();
				$('.nonindian').hide();

			}

		});

	});
</script>
</body>
</html>
