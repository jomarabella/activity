<?php   
    session_start();
    include "classes/database.php";
    include "classes/common.php";
    include "classes/Clubs.php";
    
    
    $clubUser=new Clubs();

   
    if ( isset ($_GET['delete'])){
        $clubUser->deleteClubs($_GET['delete']);
        header ("Location: clubs.php");
    }
   

    if ( isset ($_POST['EV_ID']) ) {
    $clubdata = array(   
        "EV_ID" => $_POST['EV_ID'],                     
        "Event_Name" => $_POST['Event_Name'],
        "Time" => $_POST['Time'],
        "Date" => $_POST['Date'],            
    );

   $clubUser->updateClubs( $clubdata );
 
}
else {
                    
    $clubdata = array(                        
        "Event_Name" => $_POST['Event_Name'],
        "Time" => $_POST['Time'],
        "Date" => $_POST['Date'],              
    );

   $clubUser->insertClubs( $clubdata );

}
    

/*SELECT * from members INNER join clubs on clubs.CB_ID = members.CB_ID INNER join students on students.ST_ID = members.ST_ID;*/
?>

