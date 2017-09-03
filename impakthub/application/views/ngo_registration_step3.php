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
						<li class="stage1"><a href="form_ngo_stage3.html" class="active"><span>3</span>section</a></li>
						<li class="stage1"><a href="form_ngo_stage4.html"><span>4</span>section</a></li>
						<li class="stage1"><a href="form_ngo_stage5.html" id="last"><span>5</span>Section</a></li>
					</ul>
				</div>
				<ul>
				<form id="frmTransaction" name="frmUsers" action="#" class="validate-form" method="post">
					<li class="red2">List of management team/trustee members and occupation</li>
					<li  class="half grp">
						<label>Name: </label>
						<input type="text" value="" />
						<input type="text" value="" />
						<input type="text" value="" />
						<input type="text" value="" />
						<input type="text" value="" />
					</li>
					<li  class="half rgt grp">
						<label>Occupation: </label>
						<input type="text" value="" />
						<input type="text" value="" />
						<input type="text" value="" />
						<input type="text" value="" />
						<input type="text" value="" />
					</li>
					<li>
						<label>Qualification of the management/trustee team</label>
						<input type="text" value="" />
					</li>
					<li class="half">
					<label>Legal status</label>
						<select type="text" value="" >
							<option>Trust</option>  
						</select>
					</li>
					<li   class="half rgt">
						<label class="black">Upload Legal Doc.</label>
						<input type="file" value=""  class="brow"/>
					</li>
					<li class="half cl">
						<label class="red">FCRA registration</label>
						<div class="sub_box"><input type="radio" class="red1" value="" name="vol" id="cor"/>Yes</div>
						<div class="sub_box"><input type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>
					<li   class="half rgt">
						<label class="black">IF yes Upload FCRA Doc.</label>
						<input type="file" value=""  class="brow"/>
					</li>
					<li   class="half">
						<label class="black">Awards, recognition, certificates</label>
						<input type="file" value=""  class="brow"/>
					</li>
					<li class="red2">Any fellowships founding members</li>
					<li  class="half grp">
						<label>Name </label>
						<input type="text" value="" />
						<input type="text" value="" />
						<input type="text" value="" />
						<input type="text" value="" />
						<input type="text" value="" />
					</li>
					<li  class="half rgt grp">
						<label>Name of fellowship </label>
						<input type="text" value="" />
						<input type="text" value="" />
						<input type="text" value="" />
						<input type="text" value="" />
						<input type="text" value="" />
					</li>
					<li  class="half">
						<label>Any regnition/ award founding members have</label>
						<input type="text" value="" />
					</li>
					<li  class="half rgt">
						<label>Any legal case against the founders/ owners</label>
						<input type="text" value="" />
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
