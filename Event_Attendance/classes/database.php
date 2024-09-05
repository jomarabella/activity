<?php
define ('DB_HOST', "localhost");
define('DB_USER', "root");
define ('DB_PASSWORD', "");
define ('DB_DATABASE', "event_attendance");

class Database{

    private $db;

    public function __construct()
    {
        $connect =mysqli_connect ( DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE );
    
        if (!$connect){
            die ("Connection Failed". mysqli_connect_error()); 
            return false;
        }
        $sql = "DELETE FROM event_attendance WHERE id=3";

        if (mysqli_query($connect, $sql)) {
            echo "Record deleted successfully";
          } 
        else {
            $this->db= $connect;
        }
    }
    public function Query($sql){
        return $this->db->query($sql);
        
    }
}


?>