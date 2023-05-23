<?php
declare (strict_types=1);
namespace app\models;
require_once(__DIR__.'/basemodel.php');

class User extends UserModel {
    private int $id;
    private string $name;
    private string $email;

    public function __construct()
    {
        parent::__construct();
    }

      public function Setid($id) {
       $this->id = $id;
    }
    public function Setname($name) {
        $this->name = $name;
     }
     public function Setemail($email) {
        $this->email = $email;
     }
    public function getid() {
        return $this->id;
    }

    public function getname() {
        return $this->name;
    }

    public function getemail() {
        return $this->email;
    }
    

}
