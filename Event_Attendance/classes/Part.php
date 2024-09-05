<?php
class Member
{ private $db;
    public function __construct() {
        $this->db = new database();
    }
    public function test(){
        return $this->db->Query("select * from members");
        
    }

    public function memberUser ()
    {
            $userInfo=array();
            $userInfo['']= "";
            $userInfo['Email']= "";
        return $userInfo;

    }

    public function selectMember( $Mem_ID) 
    {
        return $this->db->Query("select * from clubs where Mem_ID = '". $Mem_ID. "'");   
        
    }
    public function updateMember( $userdata)
    {
        $this->db->Query("update clubs set ClubName = '" . $userdata['ClubName']. "', Email = '".$userdata['Email'] ."' where CB_ID = '" .$userdata ['CB_ID'] . "'");
    }
 
    public function insertClubs( $userdata ) {
        $user = "insert into clubs ( ClubName, Email) value ( '". $userdata['ClubName'] ."','". $userdata['Email'] ."');";
       echo $user;
        $this->db->Query( $user );
    }
    public function deleteClubs( $CB_ID)
    {
        $this->db->Query("DELETE FROM clubs where CB_ID = '". $CB_ID."'");
    }
}