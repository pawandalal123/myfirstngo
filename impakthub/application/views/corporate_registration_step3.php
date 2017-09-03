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
						<li><a href="<?php echo SITE_URL?>corporate/registration_step2 ?>" class="complete"><span>2</span>section</a></li>
						<li><a href="#" class="active"><span>3</span>section</a></li>
						<li><a href="#" id="last"><span>4</span>Section</a></li>
					</ul>
				</div>
				<ul>
					<li>
						<label>Target No of Projects for funding*</label>
						<input type="text" value="<?php echo  @$sessiondata['funding'] ? @$sessiondata['funding'] : set_value('funding');?>"  name="funding"/>
					</li>
					<li class="half cl">
						<label>Geographical Area Preference* (if any)</label>
						<input type="text" value="<?php echo  @$sessiondata['area'] ? @$sessiondata['area'] : set_value('area');?>"  name="area"/>
					</li>
					<li  class="half rgt">
						<label>&nbsp;</label>
						<input type="text" value="<?php echo  @$sessiondata['area1'] ? @$sessiondata['area1'] : set_value('area1');?>"  name="area1"/>
					</li>
					<li  class="half">
						<label>Implementer's Years of exp preference*</label>
						<select type="text" value="" name="corp_ngo_exp">
							<option values="0">No preference</option>
							<option value="5-10">5-10 years</option>
							<option value="10">10 years</option>
						</select>
					</li>
					<li  class="half rgt">
						<label>Implementer's Size preference</label>
						<select type="text" value="" name="sizeprefrence" >
							<option value="small">Small</option>
							<option value="mid">Mid sized</option>
							<option value="large">Large</option>
							<option value="very large">Very large</option>
						</select>
					</li>
					<li  class="half">
						<label>Min amount for project</label>
						<input type="text" value="<?php echo  @$sessiondata['min_project'] ? @$sessiondata['min_project'] : set_value('min_project');?>"  name="min_project"/>
					</li>
					<li  class="half rgt">
						<label>Max amount for project</label>
						<input type="text" value="<?php echo  @$sessiondata['max_project'] ? @$sessiondata['max_project'] : set_value('max_project');?>"  name="max_project"/>
					</li>
					<li>
						<label>Target no of NGOs to be engaged </label>
						<input type="text" value="<?php echo  @$sessiondata['ngo_engaged'] ? @$sessiondata['ngo_engaged'] : set_value('ngo_engaged');?>"  name="ngo_engaged"/>
					</li>
					<li><input type="submit" class="submit" name="submitstepthree" value="next"></li>
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
