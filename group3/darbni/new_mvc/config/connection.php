<?php
namespace app\config;

class Connection {
    public $db_params;
    function __construct()
    {
        $this ->db_params=require(__DIR__.'/database.php');
    }

    public function getConnection(){
        $conn= mysqli_connect($this->db_params['host'],
        $this->db_params['username'],$this->db_params['password'],$this->db_params['database']);
        if($conn->connect_error)
        {
            die('connection failed'.$conn->connect_error);
        }
        return $conn;
    }
}


?>