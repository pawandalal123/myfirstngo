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
						<li class="stage1"><a href="form_ngo.html" class="active"><span>1</span>section</a></li>
						<li class="stage1"><a href="form_ngo_stage2.html"><span>2</span>section</a></li>
						<li class="stage1"><a href="form_ngo_stage3.html"><span>3</span>section</a></li>
						<li class="stage1"><a href="form_ngo_stage4.html"><span>4</span>section</a></li>
						<li class="stage1"><a href="form_ngo_stage5.html" id="last"><span>5</span>Section</a></li>
					</ul>
				</div>
				<ul>
				<form id="frmTransaction" name="frmUsers" action="#" class="validate-form" method="post">
					<li class="half">
						<label>Type of Organisation*</label>
						<select type="text" value="" >
							<option>Community based organization whether formal or informal.</option>
							<option> Elected local bodies such as Panchayats</option>
							<option> Voluntary Agencies (NGOs)</option>
							<option> Institutes/Academic Organizations</option>
							<option> Trusts, Mission etc.</option>
							<option>Self-help groups</option>
							<option> Government, Semi Government and autonomous Organizations.</option>
							<option> Standing Conference of Public Enterprises (SCOPE)</option>
							<option> Mahila Mondals/Samitis and the like Contracted agencies for civil works Professional Consultancy Organization etc.</option>
						</select>
					</li>
					<li class="half rgt">
						<label>Legal status:* </label>
						<select type="text" value="" >
							<option>Trust</option>
							<option>Society</option>
							<option>Association</option>
							<option>Unregistered* for NGO</option>
						</select>
					</li>
					<li class="half cl">
						<label>Registration Number*</label>
						<input type="text" value=""  name="registration"/>
					</li>
					<li class="half rgt">
						<label>Upload Registration Doc.</label>
						<input type="file" value=""  class="brow"/>
					</li>
					<li class="half cl">
						<label>Name of the Organisation/ Entity*</label>
						<input type="text" value="" />
					</li>
					<li class="half rgt">
						<label>Organisations Vision Statement</label>
						<input type="text" value="" />
					</li>
					<li>
						<label>Year of Establishment*</label>
						<select type="text" value="" >
							<option>1970</option>
							<option>1971</option>
							<option>1972</option>
							<option>1973</option>
						</select>
					</li>
					<li class="half">
						<label>Address*</label>
						<textarea type="text" value="" ></textarea>
					</li>
					<li  class="half rgt">
						<label>Village*</label>
						<input type="text" value="" />
					</li>
					<li  class="half rgt">
						<label>Block*</label>
						<input type="text" value="" />
					</li>

					<li  class="half cl">
						<label>District*</label>
						<input type="text" value="" />
					</li>
					<li  class="half rgt">
						<label>State*</label>
						<input type="text" value="" />
					</li>
					<li  class="half cl">
						<label>Pin*</label>
						<input type="text" value="" />
					</li>
					<li  class="half rgt">
						<label>Contact No. landline</label>
						<input type="text" value="" />
					</li>
					<li  class="half cl">
						<label>Contact No. mobile*</label>
						<input type="text" value="" />
					</li>
					<li  class="half rgt">
						<label>Email*</label>
						<input type="text" value="" />
					</li>
					<li  class="half">
						<label>Fax</label>
						<input type="text" value="" />
					</li>
					<li  class="half rgt">
						<label>Website</label>
						<input type="text" value="" />
					</li>
					<li class="half">
						<label class="red">80 G </label>
						<div class="sub_box"><input onclick="document.getElementById('custom').disabled = false; document.getElementById('charstype').disabled = true;" type="radio" class="red1" value="" name="vol" id="cor" checked="checked" />Yes</div>
						<div class="sub_box"><input onclick="document.getElementById('custom').disabled = true; document.getElementById('charstype').disabled = false;" type="radio" value=""  class="red1"  name="vol"/>No</div>
					</li>
					<li  class="half rgt">
						<label>If yes then certificate number* for NGO</label>
						<input type="text" id="custom" value="" />
					</li>
					<li   class="half cl">
						<label class="red">35 AC</label>
						<div class="sub_box"><input onclick="document.getElementById('custom1').disabled = false; document.getElementById('charstype').disabled = true;" type="radio" class="red1" value="" name="vol1" id="cor" checked="checked" /> Yes</div>
						<div class="sub_box"><input onclick="document.getElementById('custom1').disabled = true; document.getElementById('charstype').disabled = false;" type="radio" value=""  class="red1"  name="vol1"/>No</div>
					</li>
					<li  class="half rgt">
						<label>If yes then certificate number* for NGO</label>
						<input type="text" id="custom1" value="" />
					</li>
					<li class="half cl">
						<label class="red">FCRA</label>
						<div class="sub_box"><input onclick="document.getElementById('custom2').disabled = false; document.getElementById('charstype').disabled = true;" type="radio" class="red1" value="" name="vol2" id="cor" checked="checked"/>Yes</div>
						<div class="sub_box"> <input onclick="document.getElementById('custom2').disabled = true; document.getElementById('charstype').disabled = false;" type="radio" value=""  class="red1"  name="vol2"/> No</div>
					</li>
					<li  class="half rgt">
						<label> If yes then certificate number* & validity for NGO</label>
						<input type="text" id="custom2" value="" />
					</li>
					<li   class="half cl">
						<label>PAN Number * for NGOs</label>
						<input type="text" value="" name="pan" />
					</li>
					<li   class="half rgt">
						<label>Upload PAN Doc.</label>
						<input type="file" value=""  class="brow"/>
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
