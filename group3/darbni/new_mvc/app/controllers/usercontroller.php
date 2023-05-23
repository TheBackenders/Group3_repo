<?php
namespace app\controllers;

use app\models\User;
use mysqli;

require_once(__DIR__.'/../models/user.php');
require_once(__DIR__.'/basecontroller.php');

class UserController extends BaseController{
    
    public function __construct()
    {
        $this->model = new User();
    }

    public function index() {
    $result=$this->model->all('users','*');
    while($row = $result-> fetch_object())
 {
         $user = new User();
         $user->Setid((int)$row->id);
         $user->Setname($row->name);
         $user->Setemail($row->email);
        $users[]=$user;
}

 parent::view('users/index.html',$users);
}

public function getone($id) {
    $result=$this->model->getOne('users',$id);
    $row = $result-> fetch_object();
     $this->model->Setid((int)$row->id);
     $this->model->Setname($row->name);
     $this->model->Setemail($row->email);
 parent::view('users/getone.html',$this->model);
}

public function addone() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $this->model->Setname($name);
        $this->model->Setemail($email);
    //$row=$this->model->addone($name,$email);
    $row=$this->model->addone('users',['name','email'],[$name,$email]);
   $this->index();
}
else
{parent::view('users/add.html',[]);}
}




}

?>