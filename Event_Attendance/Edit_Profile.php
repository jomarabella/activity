<?php
  session_start();
  include "classes/database.php";
  include "classes/common.php";
  include "classes/User.php";
  $token= new Common();
  $form_token= $token->token();

  $onlineUser=new User();
  $userInfo=$onlineUser->onlineUser();
  

  
$currentpage="Edit_Profile";
$pagetitle="Update Profile";
  if(isset($_GET['user_id'])) {
    $editUser =new User();
    $userInfo = $editUser->selectUser($_GET['user_id']) ->fetch_assoc();
    $userInfo['fullname'] = $userInfo['fname'] . "" . $userInfo['lname'];

  } else {
    $userInfo['fname'] = "";
    $userInfo['lname'] = "";
    $userInfo['email'] = "";
    $userInfo['password'] = "";
  }

?>

<?php include "sections/header.php" ?>
<?php include "sections/footer.php" ?>
<div class="container-fluid">
  <div class="row">
  <?php include "sections/nav.php" ?>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
      
	  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Profile</h1>    
        <h2> <?php echo $userInfo['fullname'];?></h2>  
      </div>
   Profile  </br></br>

   <form action= "userfunction.php" method= "post"  enctype="multipart/form-data">
    <?php if(isset($_GET['ST_ID'])) { ?>
      <input type="text" value="<?php echo $_GET['ST_ID']; ?>"name="ST_ID" />
      <?php } ?>
   <input type="hidden" name="token" value="<?php echo $form_token?>">

   <div class="col-auto">
    <label for="text" class="form-label">First Name</label> 
    <input type="text"  name="FirstName" value="<?php echo $userInfo['FirstName'];?>" class="form-control" id="FirstName" placeholder="First Name">
  </div>
</br>

  <div class="col-auto">
    <label for="text" class="form-label">Last Name</label>
    <input type="text" name="LastName" value="<?php echo $userInfo['LastName'];?>"class="form-control" id="LastName" placeholder="Last Name">
  </div>
</br>

<div class="col-auto">
    <label for="text" class="form-label">Email</label>
    <input type="text" name="Email" value="<?php echo $userInfo['Email'];?>" class="form-control" id="Email" placeholder="Email ">
   
  </div>

<label for="text" class="form-label">Gender:</label> 
</br>
<div class="form-check form-check-inline">
  
  <input class="form-check-input" type="radio" name="gender" value="Male" id="gender">
  <label class="form-check-label" for="flexCheckDefault">
    Male
  </label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender"value="Female" id="gender" >
  <label class="form-check-label" for="flexCheckChecked">
    Female
  </label>
</div>
  </br>
  

  <div class="col-auto">
    <label for="text" class="form-label">Password</label> 
    <input type="password"  name="pass" value="<?php echo $userInfo['password'];?>" class="form-control" id="pass" placeholder="Password">
  </div>

</br>
<div class="col-auto">
    <label for="text" class="form-label">Confirm Password</label> 
    <input type="password"  name="conpass" value="" class="form-control" id="conpass" placeholder="Confirm Password">
  </div>
</br>
<div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
</br>
<div class="col-auto">
  Select image to upload:
</br>
  <input type="file"  name="fileToUpload[]" id="fileToUpload" multiple>
</div>
</br>
<div class="delt1">
    <button type="submit" class="btn btn-primary mb-3" name="btn" >Update Profile </button>
   
  </div>
  <div class="delt">
  <button type="delete" class="btn btn-primary mb-3" name="btn1" >Delete </button>
    </div>
  
</form>

    </main>
  </div>
</div>
