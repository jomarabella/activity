<?php
session_start();
$currentpage="login";
$pagetitle="Login";

include "classes/val.php";
include "classes/User.php";
$token= new val();
$form_token= $token->token();
?>
<?php include "sections/header.php" ?>
<?php include "sections/footer.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
<form action= "loginfunction.php" method= "post">
<div class="container-fluid">
  <div class="row">
 
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
      
	  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Log in</h1>    
        
      </div>

<div class="">
    <label for="text" class="form-label">Username</label> 
    <input type="text" class="form-control" placeholder="Username"/>
  </div>
  
  <div class="">
    <label for="text" class="form-label">Password</label>
    <input type="password" name="password" value=""class="form-control" id="password" placeholder="Password">
  </div>
</br>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3s" name="btn">Log in </button>
  </div>
  <p class="login__signup">Don't have an account? &nbsp;<a><input type="Submit" name= "Sign up" value="Sign up" ></a>
   </p>
</form>
</body>
</html>
