<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap-responsive.css" />
</head>
 
<body>
<div class="container-fluid">


          <div class="row-fluid">
          <!--fullwidth row-->
          <div class="span12">
          <div class="well">
<?php include 'navbar_fragment.php'; ?>
<center><h2>Registration Form</h2></center>
<hr />
<?php if(isset($_SESSION['user'])) { ?>
<p>Already logged in!</p>
<? 
}
else
{
	?> 

<table width="200" border="0" align="center">
<form id="form1" name="form1" method="post" action="registration_script.php">

<tr>
<td>UserName:</td>
<td>
<input type="text" name="txtUser" id="txtUser" />
 
</td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="txtPassword" id="txtPassword" /></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="btnRegister" id="btnRegister" value="Register" />
 
</td>
</tr>
</form>
</table>
<?
}
?>
</div>
 </div><!--/span-->
            
            
            
          </div><!--/row-fluid-->
          
        
      </div><!--/container-->
</body>
</html>