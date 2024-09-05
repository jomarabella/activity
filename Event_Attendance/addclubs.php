<?php
  session_start();
  include "classes/database.php";
  include "classes/common.php";
  include "classes/Clubs.php";
  $token= new Common();
  $form_token= $token->token();

  $onlineUser=new Clubs();
 

  
$currentpage="addclubs";
$pagetitle="Addclubs";
?>
<?php include "sections/header.php" ?>
<?php include "sections/footer.php" ?>
<div class="container-fluid">
  <div class="row">
  <?php include "sections/nav.php" ?>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
      
	  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Event</h1>    
        
      </div>
  Event  </br></br>

   <form action= "clubfunction.php" method= "post"  enctype="multipart/form-data">

   <input type="hidden" name="token" value="<?php echo $form_token?>">

   <div class="col-auto">
    <label for="text" class="form-label">Event </label> 
    <input type="text"  name="Event_Name" value="" class="form-control" id="Event_Name" placeholder="Event_Name ">
  </div>
</br>

  <div class="col-auto">
    <label for="text" class="form-label">Time</label>
    <input type="text" name="Time" value="" class="form-control" id="Time" placeholder="Time ">
   
  </div>
  </br>
  <div class="col-auto">
    <label for="text" class="form-label">Date</label>
    <input type="text" name="Date" value="" class="form-control" id="Date" placeholder="Date ">
   
  </div>
</br>

<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" name="btn" >Register </button>
  </div>

</form>

    </main>
  </div>
</div>
