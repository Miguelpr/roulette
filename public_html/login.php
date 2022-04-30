<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Welcome</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="/assets/css/bootstrap.css">
<link rel="stylesheet" href="/assets/css/main.css">


</head>
<!-- NAVBAR
================================================== -->

<body>

<div class="container">
  <div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form name="form_login" method="post" action="login.php" role="form">
        <fieldset>
          <h2>Please Sign In</h2>
          <hr class="colorgraph">
          <div class="form-group">
            <input name="user_id" type="text" id="user_id" class="form-control input-lg" placeholder="Email Address">
          </div>
          <div class="form-group">
            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
          </div>
          <span class="button-checkbox">
          <button type="button" class="btn" data-color="info">Remember Me</button><!-- Additional Option -->
          <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
          <hr class="colorgraph">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <input type="submit" name="Submit" value="Login" class="btn btn-lg btn-success btn-block">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6"> <a href="registration.php" class="btn btn-lg btn-primary btn-block">Register</a> </div>
          </div>
        </fieldset>
      </form>
	  
	  
	  
	  

<H2>
<?php
Include('connect.php');

if (isset($_REQUEST['Submit'])) 
{

	if($_REQUEST['user_id']=="" || $_REQUEST['password']=="")
	{
	echo " Field must be filled";
	}
	else
	{
		
		$result = mysql_query("select ID, TOTAL from USER where EMAIL= '".$_REQUEST['user_id']."' &&  PASS ='".$_REQUEST['password']."'"); 
		
		
		if ($row = mysql_fetch_assoc($result)) {
		   
		   setcookie("ID_USER", $row['ID']);
		   setcookie("TOTAL", $row['TOTAL']);
		   header("location:index.html"); 
        }
	    else
		{
			setcookie("ID_USER", 0);
			
			echo "username or password incorrect";
		}
	}
}	
?>

</H2>
    </div>
  </div>
</div>


</body>
</html>