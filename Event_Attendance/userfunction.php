<?php   
    session_start();
    include "classes/database.php";
    include "classes/common.php";
    include "classes/User.php";
    
    $validate_form = new Common();
    $onlineUser=new User();
    $target_dir = "uploads/";
    //$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
  // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
    
    $totalUploadFile=0;

    $folder = "./image/" . $target_dir;
 
    if ( isset ($_GET['delete'])){
        $onlineUser->deleteUser($_GET['delete']);
        header ("Location: members.php");
    }

    if ($validate_form->validate_submit()){
        $validate_form->character("FirstName", 4,"Invalid Firstname");
        $validate_form->character("LastName", 3,"Invalid Lastname");
        $validate_form->required("FirstName","Firstname is Empty");
        $validate_form->required("LastName","Lastname is Empty");
        $validate_form->validate_email("Email");
        $validate_form->validate_gender("Gender");
       

        if($validate_form->validate()){

            $countfiles = count($_FILES['fileToUpload']['name']);
            
            
            for($i=0;$i<$countfiles;$i++){
                
                $filename = $_FILES['fileToUpload']['name'][$i];
        
               
                 
                move_uploaded_file ($_FILES["fileToUpload"]["tmp_name"][$i], 'uploads/' . $filename);
                 $valid_extensions = array("jpg","jpeg","png","pdf","docx","php");
        
                
                echo $_POST ['FirstName'];
                echo "<br>";
                echo "file name : ".$filename."</br>"; 
                 
                echo "Total File uploaded : ".$totalUploadFile;
                "</br>";
                echo "<img src='uploads/". $filename."'/>";
                $totalUploadFile++;

                if ( isset ($_POST['ST_ID']) ) {

                    $userdata = array(
                        "ST_ID" => $_POST['ST_ID'],
                        "FirstName" => $_POST['FirstName'],
                        "LastName" => $_POST['LastName'], 
                                     
                    );

                    $onlineUser->updateUser($userdata);
                
                } 
                else {
                    
                    $userdata = array(                        
                        "FirstName" => $_POST['FirstName'],
                        "LastName" => $_POST['LastName'],  
                        "MiddleName" => $_POST['MiddleName'],  
                        "DateofBirth" => $_POST['DateofBirth'],       
                        "Gender" => $_POST['Gender'],
                        "ContactNum" => $_POST['ContactNum'], 
                        "Email" => $_POST['Email'],             
                    );

                   $onlineUser->insertUser( $userdata );

                }
                
               


            }
            
        }


   
       
       
        
           
            
            
            
           
            
            
          
        
   
          
    else{
        echo $validate_form->error_message("required","firstname");
        echo $validate_form->error_message("required","lastname");
        echo $validate_form->error_message("min","firstname");
        echo $validate_form->error_message("min","lastname");
        echo $validate_form->error_message("password","conpass");
    }
    }

    /*if($validate_form->validate_submit()){
        $string ="";
        $cf = 0;
       
        if(empty($_POST["firstname"])) {
            echo "Firstname field is empty";
            $cf++;
           
        } 

        if(empty($_POST["lastname"])) {
            echo "Lastname field is empty";
            $cf++;
          
        }

        
         if(!isset($_POST['gender'])) {
             echo "Gender field is empty";
             $cf++;
          } 
          
           
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ) {
            echo "Invalid Email";
            $cf++;
        }

        if(empty($_POST["pass"])) {
            echo "Password field is empty";
            $cf++;
           
        } 
        if(empty($_POST["conpass"])) {
            echo "Password field is empty";
            $cf++;
           
        } 
        if($_POST ["pass"] != $_POST["conpass"]){
            echo "Password does not match";
            $cf++;
         }


//character count


        if (strlen($_POST["firstname"])>10){
            echo "Number of Character is exceeded";
            $cf++;
        }
        if (strlen($_POST["lastname"])>10){
            echo "Number of Character is exceeded";
            $cf++;
        }
        if (strlen($_POST["firstname"]) < 3){
            echo "Number of Character is kuwang";
            $cf++;
        }
        if (strlen($_POST["lastname"]) < 3){
            echo "Number of Character is kuwang";
            $cf++;
        }
        if (strlen($_POST["pass"]) < 3){
            echo "Number of Character is Short";
            $cf++;
        }
       
        if($cf == 0) {
            
          
            echo $_POST ['firstname'];
             echo "<br>";
            echo $_POST ['lastname'];
            echo "<br>";
            echo $_POST ['email'];
            echo "<br>";
            echo $_POST ['gender'];
            echo "<br>";
            echo $_POST ['pass'];
            echo "<br>";
        
            echo "updated";

        }
        
       
    
    }
    else {
        echo "invalid submit";
    }*/
    
    /*
    if(isset($_POST["btn"]))
    {
        if(empty($_POST["firstname"]))
    {
    echo   " Firstname field is empty" ;
    }
    if(empty($_POST["lastname"]) )
    {
    echo   " Lastname field is empty" ;
    }
    else 
    {
    echo "Form Updated";
    }
    
    }
     
    
*/



    
    /*if(isset( $_POST['token'] ) && $_SESSION['token'] == $_POST['token'])
    {
        unset($_SESSION['token']);
        echo "run program";
    }
    else{
        echo "invalid submission";
    }*/
?>