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
    <div id="breadcrumb"><a href="#">Home</a> >  <a href="#" class="active">Register</a></div>
    <h2>Register
      <div class="divider"></div>
    </h2>
    <div id="box8">
     <div id="login">
 

        <div class="box1">
                  <label>User Name</label>
                  <input  type="text" class="log"/>
                </div>
                 
        <div class="box1">
                  <label>Password</label>
                  <input type="password" class="log"/>
                </div>
                <div class="box1">
                  <label>Confirm Password</label>
                  <input type="password" class="log"/>
                </div>
                <div class="box1">
                  <label>Account</label>
                  <select name="" class="log">
                  <option>NGO</option>
                  <option>Corporate</option>
                  <option>Government</option>
                  <option>Development Agency</option>
                  </select>
                </div>
           <div class=" clear"></div>    
        <input  type="submit" value="Submit" class="submit_log"/>
      
       
        
       
      </div>
        </div>
  </div>
</div>
<div id="footer" class="inner">
    <?php include('template/footer.php'); ?>
</div>
</body>
</html>
