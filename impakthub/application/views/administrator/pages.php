<?php $pageno = 8; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Impakthub Admin Pannel</title>
	<?php include('template/head.php'); ?>
	<!--DATA TABLE -->
	<script type="text/javascript" src="<?php echo WEBROOT_PATH_ADMIN_ASSETS; ?>js/jquery.js"></script>
	<link href="<?php echo WEBROOT_PATH_ADMIN_ASSETS; ?>data_table/css/demo_table_jui.css" rel="stylesheet" type="text/css">
	<link href="<?php echo WEBROOT_PATH_ADMIN_ASSETS; ?>js/jquery-ui-1.css" rel="stylesheet" type="text/css">
	<!--DATA TABLE --> 
    <script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$('#datatables').dataTable({
			"sPaginationType":"full_numbers",
			"iDisplayLength": 25,
			"aaSorting":[[0, "asc"]],
			"bJQueryUI":true
		});
	});
    </script>
</head>
<body>
<div id="header">
	<?php include('template/header.php'); ?>
</div>
<div class="grid_16" id="navheader">
	<div id="menu">
		<?php include('template/topnav.php'); ?>
	</div>
</div>
<div class="grid_16" id="tabs">
	<div class="container">
		<ul>
			<li><a href=""  class="current"><span>Static Pages</span></a></li>
		</ul>
	</div>
</div>
<div class="container_16" id="wrapper">
  <div class="grid_16" id="content">
	<div class="grid_9">
		<h1 class="website1">Static Pages</h1>
	</div>
	<div class="clear"></div>
	<div id="table">
			<div id="user_profile_main_div">
				<div id="message">
				<?php 
				if($this->session->flashdata('flsh_msg')) {
					?><p id="success" class="info"><span class="info_inner"><?php echo $this->session->flashdata('flsh_msg'); ?></span></p> <?php
				} 
				if($this->session->flashdata('flsh_msg1')) {
					?><p id="error" class="info"><span class="info_inner"><?php echo $this->session->flashdata('flsh_msg1'); ?></span></p> <?php
				} 
				?>
				</div>
				<table id="datatables" class="display">
					<thead>
						<tr>
							<th>Sno</th>
							<th>Title</th>
							<th>Headline</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i=0;
						foreach ($pages as $row)
						{
							$i++;
							$id = $row->id;
						?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $row->page_title; ?></td>
							<td><?php echo $row->Page_heading; ?></td>
							<td><a href="<?php echo WEBROOT_PATH_ADMIN_PATH; ?>edit_pages/<?php echo $id; ?>" title="Edit" class="edit_icon"></a></td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
  </div>
</div>
<div class="clear"> </div>
<div id="footer">
	<?php include('template/footer.php'); ?>
</div>
</body>
</html>