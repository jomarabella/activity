<?php class Attendance

{ 
    private $db;
    public function __construct() {
        $this->db = new database();
    }
    public function test(){
        return $this->db->Query("select * from attendance");
        
    }
    public function memberUser ()
    {
            $userInfo=array();
            $userInfo['Event_Name']= "";
            $userInfo['FirstName']= "";
        return $userInfo;

    }
    public function even($eveid){
        return $this->db->Query("SELECT * from attendance INNER join event on event.EV_ID = attendance.EV_ID INNER join students on students.ST_ID = attendance.ST_ID where event.EV_ID = " . $eveid);
                                
    }
 
    public function insert( $stid,$evid ) {
        $user = "insert into attendance ( ST_ID, EV_ID) value ( '". $stid ."','". $evid ."');";
        $this->db->Query( $user );
    }
    
}
?>