<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>	<meta http-equiv="content-type" content="text/html; charset=UTF-8">	<title>Impakthub Admin Pannel</title>	<?php include('template/head.php'); ?>	<!--DATA TABLE -->	<script type="text/javascript" src="<?php echo WEBROOT_PATH_ADMIN_ASSETS; ?>js/jquery.js"></script>	<link href="<?php echo WEBROOT_PATH_ADMIN_ASSETS; ?>data_table/css/demo_table_jui.css" rel="stylesheet" type="text/css">	<link href="<?php echo WEBROOT_PATH_ADMIN_ASSETS; ?>js/jquery-ui-1.css" rel="stylesheet" type="text/css">	<!--DATA TABLE -->	<script type="text/javascript" charset="utf-8">	$(document).ready(function(){		$('#datatables').dataTable({			"sPaginationType":"full_numbers",			"aaSorting":[[0, "asc"]],			"bJQueryUI":true		});	});	</script>	<script type="text/javascript">	function submitDeleteAll(){		var countChecked = 0;		var checkBox = document.getElementsByName('checkbox[]');
		var totalCheckboxes = document.getElementsByName('checkbox[]').length;
		if(totalCheckboxes!=0){
			for(var i=0; i<totalCheckboxes; i++){
				if(checkBox[i].checked == true){
					countChecked = countChecked+1;
				}	
			}	
		}
		if(countChecked!=0){
			if( confirm("Are you sure to deactiveted selected schemes?")) {
				document.frmUsers.action="?mode=delAll";
				document.frmUsers.submit();
				return true;
			}
			return false;
		}
		else		{
			alert("Please select at least one Scheme");
			return false;
		}
	}
	</script>
	<script language="JavaScript">	
	$(document).ready(function() {
		$('#selecctall').click(function(event) {  //on click
			if(this.checked) { // check select status
				$('.checkbox1').each(function() { //loop through each checkbox
					this.checked = true;  //select all checkboxes with class "checkbox1"              
				});
			}else{
				$('.checkbox1').each(function() { //loop through each checkbox
					this.checked = false; //deselect all checkboxes with class "checkbox1"                      
				});        
			}
		});
	});
	</script>
	<script language="JavaScript">
	function chkConfirm()
	{
		var chk=confirm('Are you sure to delete all data related to this scheme');
		if(chk==true)
		{
			return true;
		}
		else
		{
			return false;
		}	
	}
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
          <li><a href=""  class="current"><span>Tab 1</span></a></li>
          <li><a href=""><span>Tab 2</span></a></li>
          <li><a href=""><span>Tab 3</span></a></li>
        </ul>
      </div>
    </div>
    <div class="container_16" id="wrapper">
      <div class="grid_16" id="content">
        <div class="grid_9">
          <h1 class="csr1">CSR</h1>
        </div>
      </div>
    </div>
    <div class="clear"> </div>
<div id="footer">
	<?php include('template/footer.php'); ?>
</div>
</body>
</html>