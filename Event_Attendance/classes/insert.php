<?php
class User
{ private $db;
    public function __construct() {
        $this->db = new database();
    }

    public function selectUser( $ST_ID) 
    {
        return $this->db->Query("select * from students where ST_ID = '". $ST_ID. "'");   
        
    }
    public function insertUser( $userdata ) {
        $user = "insert into students ( FirstName, MiddleName, LastName, DateofBirth, Gender, ContactNum, Email) value ( '". $userdata['FirstName'] ."','". $userdata['MiddleName'] ."','". $userdata['LastName'] ."','". $userdata['DateofBirth'] ."','". $userdata['Gender'] ."','". $userdata['ContactNum'] ."','". $userdata['Email'] ."');";
       echo $user;
        $this->db->Query( $user );
    }
}