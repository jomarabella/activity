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

<div class="container-fluid">
  <div class="row">
  <?php include "sections/nav.php" ?>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
      
	  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

      
        <h1 class="h2">Students</h1>
              
        <h2> <?php echo $userInfo['fullname'];?></h2>  
       
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
  
        
        $res = $onlineUser->test();
        while($row = $res->fetch_assoc()) {    
        
      
        
        ?>
        
        <tr>
            <td><a href="edit_profile.php?ST_ID=<?php echo $row['ST_ID']; ?>"><?php echo $row['FirstName']; ?></a></td>
            <td><?php echo $row['MiddleName']; ?></td>
            <td><a href="#"><?php echo $row['LastName']; ?></td>
            <td><?php echo $row['DateofBirth']; ?></td>
            <td><?php echo $row['Gender']; ?></td>
            <td><?php echo $row['ContactNum']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><a href="userfunction.php?delete=<?php echo $row['ST_ID']; ?>"> delete</a></td>
        </tr>

            <?php } ?>
    </table>
    </br>
   
    </main>
  </div>
</div>
<?php include "sections/footer.php" ?>

   
   