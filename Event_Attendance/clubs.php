
<?php
 include "classes/database.php";
 include "classes/common.php";
   include "classes/Clubs.php";
   
   $token= new Common();
   $form_token= $token->token();
   $clubUser=new Clubs();
   $userInfo=$clubUser->clubUser();
  

  
 
 $currentpage="dashboard";
 $pagetitle="Dashboard";
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
  
        
        $res = $clubUser->test();
        while($row = $res->fetch_assoc()) {    
        
      
        
        ?>
        
        <tr>
            <td><a href="addclubs.php?EV_ID=<?php echo $row['EV_ID']; ?>"><?php echo $row['Event_Name']; ?></a></td>
            <td><?php echo $row['Time']; ?></td>
            <td><a href="clubfunction.php?delete=<?php echo $row['EV_ID']; ?>"> delete</a></td>
            <td><a href="Membership.php?eveid=<?php echo $row['EV_ID']; ?>">View</a></td>
        </tr>

            <?php } ?>
    </table>
    </br>
    </main>
  </div>
</div>
