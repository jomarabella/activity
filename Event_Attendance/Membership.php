<?php
 include "classes/database.php";
 include "classes/common.php";
 include "classes/membership.php";
 include "classes/User.php";
   
   $token= new Common();
   $form_token= $token->token();
   $memberUser=new Attendance();
   $userInfo=$memberUser->memberUser();
   $onlineUser=new User();
   $students=$onlineUser->test();
  
 
 $currentpage="membership";
 $pagetitle="Membership";
 
 $re = $memberUser->even($_GET['eveid']);

 $r=$re->fetch_assoc();
 if($_POST){
   extract ($_POST);
    $memberUser->insert($studentid,$_GET['eveid']);
 }
?>
<?php include "sections/header.php" ?>
<?php include "sections/footer.php" ?>
<div class="container-fluid">
  <div class="row">
  <?php include "sections/nav.php" ?>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
  <form action= "Membership.php?eveid=<?php echo $_GET['eveid']?>" method= "post"  enctype="multipart/form-data">
	  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <select name="studentid" id="event">
    <?php
  
  while($st = $students->fetch_assoc()) {    
  
    ?>

          <option value="<?php echo $st['ST_ID'];?>">  <?php echo $st['FirstName'];?></option>
             
          <?php } ?>
      </select>
      <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" name="attendance" >Add To Attendance </button>
  </div>

   <h1>Attendance <?php
   echo $r['Event_Name'];
   ?> </h1>
        
      </div>
      <style>
        tr:hover {
    background-color: #ccc;
}
td:hover {
    cursor: pointer;
}
        table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }

            td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
            }
        

            
      </style>
 
    <table border="1"> 
    <?php
  
        
  
  $res = $memberUser->even($_GET['eveid']);
  while($row = $res->fetch_assoc()) {    
  

  
      ?>
      
      <tr>
          
          <td><?php echo $row['FirstName']; ?></td>
          <td><?php echo $row['Event_Name']; ?></td>
          <td><?php echo $row['Time']; ?></td>
          <td><?php echo $row['Date']; ?></td>
          <td><a href="clubs.php?eveid=<?php echo $row['EV_ID']; ?>"> select</a></td>
          
      </tr>

      <?php } ?>
    </table>
    </br>
    </main>
  </div>
</div>
