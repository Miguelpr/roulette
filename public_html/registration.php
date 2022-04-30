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
	  <form name="registration" method="post" action="registration.php">
        <fieldset>
          <h2>Please Sign In</h2>
          <hr class="colorgraph">
          <div class="form-group">
			<input type="text" name="name" id="name" class="form-control input-lg" placeholder="Username">
          </div>
		  <div class="form-group">
            <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email">
          </div>
		  <div class="form-group">
            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
          </div>
          <div class="form-group">
            <input type="password" name="repassword" id="repassword" class="form-control input-lg" placeholder="Re-Password">
          </div>
		  
		  

          <hr class="colorgraph">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
			  <input type="submit" name="Submit" value="submit" class="btn btn-lg btn-success btn-block">
            </div>

          </div>
        </fieldset>
      </form>




<H2>
<?php
Include('connect.php');


if (isset($_REQUEST['Submit'])) 
{

If($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['password']==''|| $_REQUEST['repassword']==''){
echo "please fill the empty field.";
}else {

if($_REQUEST['password']!=$_REQUEST['repassword']){
echo "Passwords are not matching.";	
} else{
	
	
$sql="insert into USER(NAME,EMAIL,PASS,TOTAL,IP) values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."', 5000, '".ip2long($_SERVER['REMOTE_ADDR'])."')";
$res=mysql_query($sql);
If($res){
echo "Record successfully inserted";


setcookie("ID_USER", mysql_insert_id());
setcookie("TOTAL", "5000");

header("location:index.html"); 


}else{
echo "There is some problem in inserting record";
}

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



