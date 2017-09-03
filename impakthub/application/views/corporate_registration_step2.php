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
			<p class="note1">One of the biggest challenges faced by fund providers today is to evaluate the quality of their implementation partner (i.e., NGOs), due to a dearth in availability of accurate information. ImpaktHub provides a one-stop resolution to this challenge by conducting an extremely stringent and scientific rating of NGOs based on pre-defined parameters.</p>
			<form action="" method="post">
			<div class="box10">
				<div id="stage">
					<ul>
						<li><a href="<?php echo SITE_URL?>corporate/registration_step1 ?>" class="complete"><span>1</span>Company Detail</a></li>
						<li><a href="#" class="active"><span>2</span>section</a></li>
						<li><a href="#"><span>3</span>section</a></li>
						<li><a href="#" id="last"><span>4</span>Section</a></li>
					</ul>
				</div>
				<ul>
					<li class="half">
						<label>CSR- Sector of Interest*</label>
						<select  name="CSRsector" >
							<option value="No Poverty">No Poverty</option>
							<option value="Zero Hunger">Zero Hunger</option>
							<option value="Good Health and Well-being">Good Health and Well-being</option>
							<option value="Quality Education">Quality Education</option>
							<option value="Gender Equality<">Gender Equality</option>
							<option value="Clean Water and Sanitation">Clean Water and Sanitation</option>
							<option value="Affordable and Clean Energy">Affordable and Clean Energy</option>
							<option value="Decent Work and Economic Growth">Decent Work and Economic Growth</option>
							<option value="Industry, Innovation and Infrastructure<">Industry, Innovation and Infrastructure</option>
							<option value="Reduced Inequalities">Reduced Inequalities</option>
							<option value="Sustainable Cities and Communities">Sustainable Cities and Communities</option>
							<option value="Responsible Consumption and Production">Responsible Consumption and Production</option>
							<option value="Climate Action">Climate Action</option>
							<option value="Life Below Water">Life Below Water</option>
							<option value="Life on Land">Life on Land</option>
							<option value="Peace, Justice and Strong Institutions<">Peace, Justice and Strong Institutions</option>
							<option value="Partnerships for the Goals">Partnerships for the Goals</option>
						</select>
						<?php echo form_error('CSRsector');?>
					</li>
					<li class="half rgt">
						<label>Sub-sector </label>
						<select  name="CSRsubsector" >
							<option value="Wildlife">Wildlife</option>
						</select>
						<?php echo form_error('CSRsubsector');?>
					</li>

					<li  class="half">
						<label>Existing CSR Project Areas*</label>
						<input type="text" value="<?php echo  @$sessiondata['project_area'] ? @$sessiondata['project_area'] : set_value('project_area');?>"  name="project_area"/>
					</li>
					<li  class="half rgt">
						<label>No of Current Implementing partners*</label>
						<input type="text" value="<?php echo  @$sessiondata['implementing_partners'] ? @$sessiondata['implementing_partners'] : set_value('implementing_partners');?>"  name="implementing_partners"/>
					</li>
					<li  class="half">
						<label>No of years of CSR activity*</label>
						<input type="text" value="<?php echo  @$sessiondata['csr_activity'] ? @$sessiondata['csr_activity'] : set_value('csr_activity');?>"  name="csr_activity"/>
					</li>
					<li  class="half rgt">
						<label>Stage of CSR in the company*</label>
						<select type="text" name="csr_stage" >
							<option  value="Just started">Just started</option>
							<option value="Partially established">Partially established</option>
							<option value="Well established">Well established</option>
						</select>
					</li>
					<li  class="half">
						<label>Annual CSR prescribed Budget TY*</label>
						<input type="text" value="<?php echo  @$sessiondata['budget_ty'] ? @$sessiondata['budget_ty'] : set_value('budget_ty');?>"  name="budget_ty"/>
					</li>
					<li  class="half rgt">
						<label>Annual CSR prescribed budget LY*</label>
						<input type="text" value="<?php echo  @$sessiondata['budget_ly'] ? @$sessiondata['budget_ly'] : set_value('budget_ly');?>"  name="budget_ly"/>
					</li>
					<li  class="half">
						<label>CSR expected spend TY*</label>
						<input type="text" value="<?php echo  @$sessiondata['spend_ty'] ? @$sessiondata['spend_ty'] : set_value('spend_ty');?>"  name="spend_ty"/>
					</li>
					<li  class="half rgt">
						<label>CSR spend LY*</label>
						<input type="text" value="<?php echo  @$sessiondata['spend_ly'] ? @$sessiondata['spend_ly'] : set_value('spend_ly');?>" name="spend_ly" />
					</li>
					<li  class="half">
						<label>Annual CSR spend LLY</label>
						<input type="text" value="<?php echo  @$sessiondata['spend_lly'] ? @$sessiondata['spend_lly'] : set_value('spend_lly');?>"  name="spend_lly"/>
					</li>
					<li  class="half rgt">
						<label>Annual CSR prescribed Budget LLY</label>
						<input type="text" value="<?php echo  @$sessiondata['budget_lly'] ? @$sessiondata['budget_lly'] : set_value('budget_lly');?>"  name="budget_lly"/>
					</li>
					<li>
						<label>Av, Size of Project (Rs. Cr)*</label>
						<input type="text" value="<?php echo  @$sessiondata['size_project'] ? @$sessiondata['size_project'] : set_value('size_project');?>"  name="size_project"/>
					</li>
					<li>
						<label class="red">Are you looking for employee engagemnt</label>
						<div class="sub_box">
						<input type="radio" class="red1" value="yes" name="employee_engagemnt" id="cor" checked />Yes</div>
						<div class="sub_box">
						<input type="radio" class="red1" value="no"    name="employee_engagemnt"/>No
						</div>
					</li>

					
					<li>
					<input type="submit" class="submit" name="submitsteptwo" value="next">
					
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
