
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
			<form action="" method="post">
			<div class="box10">
				<div id="stage">
					<ul>
						<li><a href="#" class="active"><span>1</span>Company Detail</a></li>
						<li><a href="#"><span>2</span>section</a></li>
						<li><a href="#"><span>3</span>section</a></li>
						<li><a href="#" id="last"><span>4</span>Section</a></li>
					</ul>
				</div>
				<ul>
				
					<li class="half">
						<label>Name of the Company*</label>
						<input type="text" name="company"  value="<?php echo  @$sessiondata['company'] ? @$sessiondata['company'] : set_value('company');?>" />
					</li>
					<li class="half rgt">
						<label>Year of establishment*</label>
						<select type="text"  name="establishment" >
							<?php 
							for($i=1970; $i<=2017;$i++)
							{
								$selected='';
								if(@$sessiondata["establishment"]==$i)
								{ 
									$selected='selected';
								 } 
								 
								echo '<option value="'.$i.'" '.$selected.'>'.$i.'</option>';

							}
							?>
						</select>
					</li>
					<li class="half">
						<label>Address*</label>
						<textarea type="text"  name="address" ><?php echo  @$sessiondata['address'] ? @$sessiondata['industry'] : set_value('address');?></textarea>
						<?php echo form_error('address');?>
					</li>
					<li  class="half rgt">
						<label>State*</label>
						<input type="text" value="<?php echo  @$sessiondata['state'] ? @$sessiondata['state'] : set_value('state');?>" name="state"  />
						<?php echo form_error('state');?>
					</li>
					<li  class="half rgt">
						<label>City*</label>
						<input type="text" value="<?php echo  @$sessiondata['city'] ? @$sessiondata['city'] : set_value('city');?>" name="city"  />
						<?php echo form_error('city');?>
					</li>
					<li  class="half cl">
						<label>Website*</label>
						<input type="text" value="<?php echo  @$sessiondata['website'] ? @$sessiondata['website'] : set_value('website');?>" name="website"  />
						<?php echo form_error('website');?>
					</li>
					<li  class="half rgt">
						<label>No of employees*</label>
						<input type="text" value="<?php echo  @$sessiondata['no_employee'] ? @$sessiondata['no_employee'] : set_value('no_employee');?>" name="no_employee"  />
						<?php echo form_error('no_employee');?>

					</li>
					<li  class="half">
						<label>Industry*</label>
						<input type="text" value="<?php echo  @$sessiondata['industry'] ? @$sessiondata['industry'] : set_value('industry');?>" name="industry"  />
					</li>
					<li  class="half rgt">
						<label>Region*</label>
						<input type="text" value="<?php echo  @$sessiondata['region'] ? @$sessiondata['region'] : set_value('region');?>" name="region"  />
					</li>
					<li>
						<label>Annual Turnover*</label>
						<input type="text" value="<?php echo  @$sessiondata['turnover'] ? @$sessiondata['turnover'] : set_value('turnover');?>" name="turnover"  />
					</li>
					<li>
					<input type="submit" name="submitstepone" class="submit" value="NEXT">
					
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
