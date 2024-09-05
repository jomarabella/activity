<?php
include "classes/database.php";
include "classes/common.php";
  include "classes/User.php";
  $token= new Common();
  $form_token= $token->token();
  $onlineUser=new User();
  $userInfo=$onlineUser->onlineUser();

$currentpage="dashboard";
$pagetitle="Dashboard";
?>
<?php include "sections/header.php" ?>
<?php include "sections/footer.php" ?>


<style>
  button {
    
   
    
    width: 150px;
    height: 50px;
  }
</style>
<div class="container-fluid">
  <div class="row">
  <?php include "sections/nav.php" ?>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
      
	  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>    
        <h2> <?php echo $userInfo['fullname'];?></h2>  
      </div>
      <p><a href="clubs.php">
<img border="0" alt="Clubs" src="https://www.w3schools.com/tags/logo_w3s.gif" width="100" height="100"></a></button>
  </p>
  <div class="col-auto">
    <button type="button" class="btn btn-primary mb-3" name="btn1" >Students</button>
  </div>
     Dashboard
    </main>
  </div>
</div>
