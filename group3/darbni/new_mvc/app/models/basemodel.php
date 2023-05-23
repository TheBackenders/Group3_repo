<?php
namespace app\models;
use app\config\Connection;
require(__DIR__.'/../../config/connection.php');

class UserModel
{
    public $conn;

    public function __construct()
    {
        $db= new Connection();
        $this->conn = $db->getConnection();
    }

    public function all($tb_name,$args)
    {
        $query= 'SELECT'.$args.'FROM '.$tb_name;
        $result = $this->conn->query($query);
        return $result;
    }

    public function getone($tb_name,$id)
    {
        $query= 'SELECT * FROM '.$tb_name.' WHERE id= '.$id;
        $result = $this->conn->query($query);
        return $result;
    }

   

    public function addone($tb_name,$col, $var) {
   
         $q = "INSERT  INTO ".$tb_name ."(";   
       $len = count($col);
          for($i=0;$i<$len-1;$i++)
          {$q = $q . $col[$i].",";}
             $q = $q.$col[$len-1];
          $q = $q . ") Values (";
          for($i=0;$i<$len-1;$i++)
         { $q = $q ."'". $var[$i]."',";}
         $q = $q."'".$var[$len-1]."'";

         $q =  $q . ");";
         $result = $this->conn->query($q);}
    }




?>