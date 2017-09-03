<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset='utf-8' />
	<meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php echo $details['page_title']; ?></title>
	<?php include('template/head.php'); ?>
	<link href="<?php echo WEBROOT_PATH_WEB_ASSETS; ?>js/animate.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
<div id="header">
	<?php include('template/header.php'); ?>
</div>
<!---------Page content----------->
<div id="outer7">
	<div class="container">
		<div id="breadcrumb">
		<a href="<?php echo SITE_URL;?>">Home</a> > 			
		<?php if(($details['id'] == '1') or ($details['id'] == '2')) { ?>				
			<a href="<?php echo SITE_URL;?>about_us">About us</a> > 			
		<?php } else if(($details['id'] == '3') or ($details['id'] == '4') or ($details['id'] == '5')){?>				
			<a href="<?php echo SITE_URL;?>custom_designed_projects">Our Advantages</a> > 			
		<?php } else if(($details['id'] == '6') or ($details['id'] == '7')) {?>				
			<a href="<?php echo SITE_URL;?>providers">Our Solutions</a> > 			
		<?php } ?>		
		<a href="#" class="active"><?php echo $details['Page_heading']; ?></a>
		</div>
		<h2><?php echo $details['Page_heading']; ?><div class="divider"></div></h2>
		<?php echo $details['discerption']; ?>
	</div>
</div>
<div id="footer" class="inner">
	<?php include('template/footer.php'); ?>
</div>
</body>
</html>
