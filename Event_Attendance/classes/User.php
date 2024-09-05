<?php
class User
{ private $db;
    public function __construct() {
        $this->db = new database();
    }
    public function test(){
        return $this->db->Query("select * from students");
        
    }

    public function onlineUser ()
    {
            $userInfo=array();
            $userInfo['fullname']= "John Philip Lauro";
            $userInfo['FirstName']= "John Philip";
            $userInfo['MiddleName']= "P.";
            $userInfo['LastName']= "Lauro";
            $userInfo['DateofBirth']= "";
            $userInfo['Gender']= "";
            $userInfo['ContactNum']= "";
            $userInfo['Email']= "";
        return $userInfo;

    }
    public function selectUser( $ST_ID) 
    {
        return $this->db->Query("select * from students where ST_ID = '". $ST_ID. "'");   
        
    }
    public function updateUser( $userdata)
    {
        $this->db->Query("update students set FirstName = '" . $userdata['FirstName']. "', LastName = '".$userdata['LastName'] ."' where ST_ID = '" .$userdata ['ST_ID'] . "'");
    }
 
    public function insertUser( $userdata ) {
        $user = "insert into students ( FirstName, MiddleName, LastName, DateofBirth, Gender, ContactNum, Email) value ( '". $userdata['FirstName'] ."','". $userdata['MiddleName'] ."','". $userdata['LastName'] ."','". $userdata['DateofBirth'] ."','". $userdata['Gender'] ."','". $userdata['ContactNum'] ."','". $userdata['Email'] ."');";
       echo $user;
        $this->db->Query( $user );
    }
    public function deleteUser( $ST_ID)
    {
        $this->db->Query("DELETE FROM students where ST_ID = '". $ST_ID."'");
    }
}
?>