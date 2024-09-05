
<?php
  include "classes/User.php";
  $onlineUser=new User();
  $userInfo=$onlineUser->onlineUser();

$currentpage="clubs";
$pagetitle="Clubs";
?>
<?php include "sections/header.php" ?>
<?php include "sections/footer.php" ?>
<div class="container-fluid">
  <div class="row">
  <?php include "sections/nav.php" ?>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
      
	  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Clubs</h1>    
        <h2> <?php echo $userInfo['fullname'];?></h2>    
      </div>
      Home
    </main>
  </div>
</div>
