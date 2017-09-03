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
						<li><a href="<?php echo SITE_URL;?>/Government_agency/registration_step2" class="active"><span>2</span>section</a></li>
						<li><a href="<?php echo SITE_URL;?>/Government_agency/registration_step3" class="complete"><span>3</span>section</a></li>
						<li><a href="<?php echo SITE_URL;?>/Government_agency/registration_step4" class="complete" ><span>4</span>Section</a></li>
						<?php


					} 
					else
					{
						?>
						<li><a href="<?php echo SITE_URL; ?>Government_agency/registration_step1" class="complete"><span>1</span>Company Detail</a></li>
						<li><a href="#" class="active"><span>2</span>section</a></li>
						<li><a href="#"><span>3</span>section</a></li>
						<li><a href="#" id="last"><span>4</span>Section</a></li>
						<?php

					}
					?>
						
					</ul>
				</div>
				<ul>
					<li class="half">
						<label>Sector of Interest</label>
						<select   name="sectorofintres" >
							<option value="Environment">Environment</option>
							<option value="Livelihoods">Livelihoods</option>
							<option value="Health">Health</option>
						</select>
					</li>
					<li class="half rgt">
						<label>Sub-sector </label>
						<select  name="dev_sub_sector">
							<option value="Wildlife">Wildlife</option>
						</select>
					</li>
					<li>
						<label>What are you looking for in your Implementer</label>
						<div class="box12">
							<div class="left">Rank 1</div>
							<div class="right"> 
								<select  name="dev_verification" >
									<option value="1">Verification of on ground work </option>
									<option value="2">Timely and full reporting in standard format</option>
									<option value="3">Meeting timelines and milestones</option>
									<option value="4">Return on Investment </option>
									<option value="5">Promise vs. delivery </option>
									<option value="6">Impact Measurement </option>
								</select>
								</div>
							</div>
							<div class="box12 rgt">
								<div class="left">Rank 2</div>
								<div class="right"> 
									<select  name="dev_full_reporting" >
										<option value="1">Verification of on ground work </option>
									<option value="2">Timely and full reporting in standard format</option>
									<option value="3">Meeting timelines and milestones</option>
									<option value="4">Return on Investment </option>
									<option value="5">Promise vs. delivery </option>
									<option value="6">Impact Measurement </option>
									</select>
								</div>
							</div>
							<div class="box12">
								<div class="left">Rank 3</div>
								<div class="right"> 
									<select  name="dev_timelines" >
										<option value="1">Verification of on ground work </option>
									<option value="2">Timely and full reporting in standard format</option>
									<option value="3">Meeting timelines and milestones</option>
									<option value="4">Return on Investment </option>
									<option value="5">Promise vs. delivery </option>
									<option value="6">Impact Measurement </option>
									</select>
								</div>
							</div>
							<div class="box12 rgt">
								<div class="left">Rank 4</div>
								<div class="right"> 
									<select  name="dev_ROI" >
										<option value="1">Verification of on ground work </option>
									<option value="2">Timely and full reporting in standard format</option>
									<option value="3">Meeting timelines and milestones</option>
									<option value="4">Return on Investment </option>
									<option value="5">Promise vs. delivery </option>
									<option value="6">Impact Measurement </option>
									</select>
								</div>
							</div>
							<div class="box12">
								<div class="left">Rank 5</div>
								<div class="right"> 
									<select  name="dev_promise_vs_delivery" >
										<option value="1">Verification of on ground work </option>
									<option value="2">Timely and full reporting in standard format</option>
									<option value="3">Meeting timelines and milestones</option>
									<option value="4">Return on Investment </option>
									<option value="5">Promise vs. delivery </option>
									<option value="6">Impact Measurement </option>
									</select>
								</div>
							</div>
							<div class="box12 rgt">
								<div class="left">Rank 6</div>
								<div class="right"> 
									<select  name="dev_impact_measure" >
										<option value="1">Verification of on ground work </option>
									<option value="2">Timely and full reporting in standard format</option>
									<option value="3">Meeting timelines and milestones</option>
									<option value="4">Return on Investment </option>
									<option value="5">Promise vs. delivery </option>
									<option value="6">Impact Measurement </option>
									</select>
								</div>
							</div>
							</li>
							<li>
								<label>What are you looking for in the project</label>
								<div class="box12">
									<div class="left">Rank 1</div>
									<div class="right"> 
										<select  name="dev_goals_startegy" >
											<option value="1">Strategic to company goals</option>
											<option value="2">Scalebility and replicability</option> 
											<option value="3">Sustainability - impact beyond project </option>
											<option value="4">Sustainability - self sustainance </option>
											<option value="5">Communicating the CSR initiatives</option>
											<option value="6">Measurable outcomes</option>
										</select>
									</div>
								</div>
								<div class="box12 rgt">
									<div class="left">Rank 2</div>
									<div class="right"> 
										<select  name="dev_scale" >
											<option value="1">Strategic to company goals</option>
											<option value="2">Scalebility and replicability</option> 
											<option value="3">Sustainability - impact beyond project </option>
											<option value="4">Sustainability - self sustainance </option>
											<option value="5">Communicating the CSR initiatives</option>
											<option value="6">Measurable outcomes</option>
										</select>
									</div>
								</div>
								<div class="box12">
									<div class="left">Rank 3</div>
									<div class="right"> 
										<select  name="dev_sustain" >
											<option value="1">Strategic to company goals</option>
											<option value="2">Scalebility and replicability</option> 
											<option value="3">Sustainability - impact beyond project </option>
											<option value="4">Sustainability - self sustainance </option>
											<option value="5">Communicating the CSR initiatives</option>
											<option value="6">Measurable outcomes</option>
										</select>
									</div>
								</div>
								<div class="box12 rgt">
									<div class="left">Rank 4</div>
										<div class="right"> 
										<select  name="dev_self_sustain" >
											<option value="1">Strategic to company goals</option>
											<option value="2">Scalebility and replicability</option> 
											<option value="3">Sustainability - impact beyond project </option>
											<option value="4">Sustainability - self sustainance </option>
											<option value="5">Communicating the CSR initiatives</option>
											<option value="6">Measurable outcomes</option>
										</select>
									</div>
								</div>
								<div class="box12">
									<div class="left">Rank 5</div>
									<div class="right"> 
										<select  name="dev_comm_csr" >
											<option value="1">Strategic to company goals</option>
											<option value="2">Scalebility and replicability</option> 
											<option value="3">Sustainability - impact beyond project </option>
											<option value="4">Sustainability - self sustainance </option>
											<option value="5">Communicating the CSR initiatives</option>
											<option value="6">Measurable outcomes</option>
										</select>
									</div>
								</div>
								<div class="box12 rgt">
									<div class="left">Rank 6</div>
									<div class="right"> 
										<select  name="dev_outcomes">
											<option value="1">Strategic to company goals</option>
											<option value="2">Scalebility and replicability</option> 
											<option value="3">Sustainability - impact beyond project </option>
											<option value="4">Sustainability - self sustainance </option>
											<option value="5">Communicating the CSR initiatives</option>
											<option value="6">Measurable outcomes</option>
										</select>
									</div>
								</div>
							</li>
						</div>
					<li>
					<!-- <a href="form_development_agency_stage3.html" class="submit">NEXT</a> -->
					<input type="submit" name="savesteptwo" value="NEXT" class="submit"></li>
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
