<?php   
    session_start();
    include "classes/val.php";
    include "classes/User.php";
    $validate_form = new val();

    if ($validate_form->validate_submit()){
        $validate_form->character("firstname", 4,"Invalid Firstname");
        $validate_form->validate_pass("pass", 4,"Invalid Password");
        if($validate_form->validate()){
            echo "You are Log in";
            
        }
        else{
            echo $validate_form->error_message("required","firstname");
            echo $validate_form->error_message("required","password");
        }
    }
    ?>