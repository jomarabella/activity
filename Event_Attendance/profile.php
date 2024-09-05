<?php
  session_start();
  include "classes/database.php";
  include "classes/common.php";
  include "classes/User.php";
  $token= new Common();
  $form_token= $token->token();

  $onlineUser=new User();
  $userInfo=$onlineUser->onlineUser();

  
$currentpage="profile";
$pagetitle="Profile";
?>
<?php include "sections/header.php" ?>
<?php include "sections/footer.php" ?>
<div class="container-fluid">
  <div class="row">
  <?php include "sections/nav.php" ?>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
      
	  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Student Profile</h1>    
        <h2> <?php echo $userInfo['fullname'];?></h2>  
      </div>
   Profile  </br></br>

   <form action= "userfunction.php" method= "post"  enctype="multipart/form-data">

   <input type="hidden" name="token" value="<?php echo $form_token?>">

   <div class="col-auto">
    <label for="text" class="form-label">First Name</label> 
    <input type="text"  name="FirstName" value="<?php echo $userInfo['FirstName'];?>" class="form-control" id="FirstName" placeholder="First Name">
  </div>
</br>
<div class="col-auto">
    <label for="text" class="form-label">Middle Name</label> 
    <input type="text"  name="MiddleName" value="<?php echo $userInfo['MiddleName'];?>" class="form-control" id="MiddleName" placeholder="Middle Name">
  </div>
</br>

  <div class="col-auto">
    <label for="text" class="form-label">Last Name</label>
    <input type="text" name="LastName" value="<?php echo $userInfo['LastName'];?>"class="form-control" id="LastName" placeholder="Last Name">
  </div>
</br>

<div class="col-auto">
    <label for="text" class="form-label">Date of Birth</label> 
    <input type="text"  name="DateofBirth" value="<?php echo $userInfo['DateofBirth'];?>" class="form-control" id="DateofBirth" placeholder="Date of Birth">
  </div>
</br>

<label for="text" class="form-label">Gender:</label> 
</br>
<div class="form-check form-check-inline">
  
  <input class="form-check-input" type="radio" name="Gender" value="Male" id="Gender">
  <label class="form-check-label" for="flexCheckDefault">
    Male
  </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Gender"value="Female" id="Gender" >
  <label class="form-check-label" for="flexCheckChecked">
    Female
  </label>
</div>
  </br>

  <div class="col-auto">
    <label for="text" class="form-label">Contact Number</label> 
    <input type="text"  name="ContactNum" value="<?php echo $userInfo['ContactNum'];?>" class="form-control" id="ContactNum" placeholder="Contact Number">
  </div>
</br>
  <div class="col-auto">
    <label for="text" class="form-label">Email</label>
    <input type="text" name="Email" value="<?php echo $userInfo['Email'];?>" class="form-control" id="Email" placeholder="Email ">
   
  </div>


<div class="col-auto">
  Select image to upload:
</br>
  <input type="file"  name="fileToUpload[]" id="fileToUpload" multiple>
</div>
</br>
<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" name="btn" >Update Profile </button>
  </div>

</form>

    </main>
  </div>
</div>
