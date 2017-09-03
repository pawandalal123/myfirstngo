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
<!---------form content----------->
<div id="outer7">
	<div class="container">
		<div id="breadcrumb"><a href="#">Home</a> > <a href="#">Our Solutions</a> > <a href="#" class="active">Curated Automated Online Platform</a></div>
		<h2>NGO<div class="divider"></div></h2>
		<div id="box8">
			<p class="note1">One of the biggest challenges faced by fund providers today is to evaluate the quality of their implementation partner (i.e., NGOs), due to a dearth in availability of accurate information. ImpaktHub provides a one-stop resolution to this challenge by conducting an extremely stringent and scientific rating of NGOs based on pre-defined parameters.</p>
			<div class="box10">
				<div id="stage">
					<ul>
						<li class="stage1"><a href="form_ngo.html"   class="complete"><span>1</span>section</a></li>
						<li class="stage1"><a href="form_ngo_stage2.html" class="complete"><span>2</span>section</a></li>
						<li class="stage1"><a href="form_ngo_stage3.html" class="complete"><span>3</span>section</a></li>
						<li class="stage1"><a href="form_ngo_stage4.html" class="active"><span>4</span>section</a></li>
						<li class="stage1"><a href="form_ngo_stage5.html" id="last"><span>5</span>Section</a></li>
					</ul>
				</div>
				<ul>
				<form id="frmTransaction" name="frmUsers" action="#" class="validate-form" method="post">
					<li class="half case2">
						<label>Are audited financial records available?*</label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>
					<li  class="half rgt">
						<label>IF yes, Please specify</label>
						<input type="text" value="" />
					</li>
					<li class="half case2 cl">
						<label>Are the source of funds available for viewing?*</label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>
					<li  class="half rgt">
						<label>IF yes, Please specify</label>
						<input type="text" value="" />
					</li>
					<li class="half case2 cl">
						<label>Fund deployment available for vieweing?*</label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>
					<li  class="half rgt">
						<label>IF yes, Please specify</label>
						<input type="text" value="" />
					</li>
					<li class="half cl">
						<label>Funding from government?* </label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>
					<li class="half rgt">
						<label>Funding from bilateral/ multilateral donor/agency/internation foundations *</label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>
					<li class="half cl">
						<label>Are the projects where funds have been utilised availble for viewing? *</label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>
					<li  class="half rgt">
						<label>IF yes, Please specify</label>
						<input type="text" value="" />
					</li>
					<li class="half cl">
						<label>Is grivience addressal mechanism (hierarchy) *</label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>
					<li  class="half rgt">
						<label>Pls upload grievience addressal mechanism </label>
						<input type="file" value=""  class="brow"/>
					</li>
					<li class="half">
						<label>Are visits possible to the projects underway?</label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>
					<li class="red2">Manpower</li>
					<li class="half case2">
						<label>Do you have direct employees on your rolls*</label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>
					<li  class="half rgt">
						<label>IF yes, Please specify</label>
						<input type="text" value="" />
					</li>
					<li class="half case2 cl">
						<label>No of staff not on rolls or on contract*</label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>
					<li  class="half rgt">
						<label>IF yes, Please specify</label>
						<input type="text" value="" />
					</li>
					<li class="half case2 cl">
						<label>Do you have your own supervisors?*</label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>
					<li  class="half rgt">
						<label>IF yes, Please specify</label>
						<input type="text" value="" />
					</li>
					<li class="half case2 cl">
						<label>Are local people involved in managing projects*</label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>
					<li  class="half rgt">
						<label>IF yes, Please specify</label>
						<input type="text" value="" />
					</li>
					<li>
						<label>How is the local community involved*</label>
						<select type="text" value="" >
							<option>Involved in what capacity - community change agents</option>
							<option>Labour</option>
							<option>Entrepreneurs attached to NGOs</option>             
						</select>
					</li>
					<li class="half case2 cl">
						<label>Do you outsource any part of the project to other NGO's*</label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>
					<li  class="half rgt">
						<label>If yes - please elaborate type of work outsourced to other NGOs</label>
						<input type="text" value="" />
					</li>
					<li  class="half">
						<label>What % of the work is typically outsourced to other NGOs*</label>
						<input type="text" value="" />
					</li>
					<li class="half rgt">
						<label>Administrative expense as % of total funds available*</label>
						<select type="text" value="" >
							<option>Environment</option>
							<option>Environment</option>
							<option>Environment</option>
							<option>Environment</option>
						</select>
					</li>
					<li>
						<label>How does the project reporting happen?</label>
						<input type="text" value="" />
					</li>

					<li class="half case2 cl">
						<label>Documented administrative policies and procedures available*</label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>

					<li class="half rgt case2">
						<label>IF yes Upload Doc.</label>
						<input type="file" value=""  class="brow"/>
					</li>
					<li class="half case2 cl">
						<label>Financial systems and procedures in place*</label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>

					<li class="half case2">
						<label>Training programme for employees in place*</label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>

					<li  class="half">
						<label>Frequency of training </label>
						<select type="text" value="" >
							<option>Environment</option>
							<option>Environment</option>
							<option>Environment</option>
							<option>Environment</option>
						</select>
					</li>
					<li class="half rgt">
						<label>No. of employees trained </label>
						<input type="text" value="" />
					</li>
					<li class="half case2 cl">
						<label>Training calendar</label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>
					<li class="half rgt case2">
						<label>IF yes Upload Doc.</label>
						<input type="file" value=""  class="brow"/>
					</li>
					<li class="half case2 cl">
						<label>Agreeable to unscheduled audit/ field visits</label>
						<div class="sub_box case1"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box case1"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>
					<li><input type="submit" value="NEXT" class="submit" /></li>
				</form>
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
