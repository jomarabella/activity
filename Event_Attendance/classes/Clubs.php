<?php
class Clubs
{ private $db;
    public function __construct() {
        $this->db = new database();
    }
    public function test(){
        return $this->db->Query("select * from event");
        
    }

    public function clubUser ()
    {
            $userInfo=array();
            $userInfo['Event_Name']= "";
            $userInfo['Time']= "";
            $userInfo['Date']= "";
        return $userInfo;

    }

    public function selectClubs( $EV_ID) 
    {
        return $this->db->Query("select * from event where EV_ID = '". $EV_ID. "'");   
        
    }
    public function updateClubs( $clubdata)
    {
        $this->db->Query("update event set Event_Name = '" . $clubdata['Event_Name']. "', Time = '".$clubdata['Time'] ."', Date = '".$clubdata['Date'] ."' where EV_ID = '" .$userdata ['EV_ID'] . "'");
    }
 
    public function insertClubs( $clubdata ) {
        $user = "insert into event ( Event_Name, Time, Date) value ( '". $clubdata['Event_Name'] ."','". $clubdata['Time'] ."','". $clubdata['Date'] ."');";
        $this->db->Query( $user );
    }
    public function deleteClubs( $EV_ID)
    {
        $this->db->Query("DELETE FROM event where EV_ID = '". $EV_ID."'");
    }
}
?>