<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
.form_area
{
	font-family: Verdana, Geneva, sans-serif;
	font-size: 11px;
	color: #999;
	width:auto;
	float:left;
	height:auto;	
	margin:0px;
	padding:0px;
}
.form_area table
{
	margin:0 auto;
}
.form_area table td
{	
	padding:5px;
}
input
{
	background: #FFF;
	border: 1px solid #DDD;
	border-radius: 3px;
	font-size: 11px;
	font-family: Tahoma, Arial, Helvetica, sans-serif;
	padding: 5px 3px;
	width:170px;
}
.red
{
	color:#FF0014;
}
</style>
<script type="text/javascript" src="<?php echo WEBROOT_PATH_ADMIN_ASSETS; ?>js/jquery-1.7.2.min.js"></script>
<link href="<?php echo WEBROOT_PATH_ADMIN_ASSETS; ?>css/message.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript">
$(document).ready(function()
{
	$('.error').hide();
	$('.error1').hide();	
	$('#changePass').click(function()
	{
		var oldpass=$('#old').val();
		var newpass=$('#new').val();
		var conpass=$('#confirm_new').val();				
		if(oldpass==''||newpass==''||conpass=='')
		{
			$('.error').show();
			return false;
		}		
		else
		{
			if(newpass!=conpass)
			{
				$('.error1').show();
			}
			else
			{
				$('.error').hide();
				$('.error1').hide();
				var dataString = 'changePass='+ 'btnChange' + '&oldpass='+ oldpass + '&newpass=' + newpass + '&conpass=' + conpass;			
				$.ajax(
				{
					type: "POST",
					url: "<?php echo base_url(); ?>index.php/administrator/changpass",
					data: dataString,
					success: function(result)
					{
						$('.displayData').html(result);									
					}
				});
			}
		}
	});
});
</script>
</head>
<body>
<div class="form_area">
<div class="displayData"></div>
<p class="error red"><span class="err_msg">*</span> All fields are required.</p>
<p class="error1 red">New password and confirm password not matching.</p>
<table align="center">
    <tr>
        <td>Old Password <span class="err_msg">*</span></td>
   	  	<td>
        	<input type="password" name="old_password" id="old"/>           
		</td>
    </tr>    
    <tr>
        <td>New Password <span class="err_msg">*</span></td>
        <td>			
            <input type="password" name="new_password" id="new"/>
        </td>       
    </tr>
    <tr>
        <td>Confirm Password <span class="err_msg">*</span></td>
        <td>        	
          	<input type="password" name="con_new_password" id="confirm_new"/>        		
		</td>
    </tr>  
    <tr>
        <td colspan="2" align="right" style="margin-top:20px;">
        	<input type="button" name="btnChange" value="Change" id="changePass"/>
		</td>
    </tr>
</table>
</div>
</body>
</html>