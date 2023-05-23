<?php
use app\controllers\UserController;
use app\models\User;
require_once(__DIR__.'/../app/models/user.php');
require_once (__Dir__.'/../app/controllers/usercontroller.php');

define('BASE_PATH', '/darbni/new_mvc/public/');

if ($_SERVER['REQUEST_URI'] === BASE_PATH) {  
    $controller = new UserController();
    $controller->index();
}
elseif ($_SERVER['REQUEST_URI'] === BASE_PATH . 'add/') {
    $controller = new UserController();
    $controller->addone();

   }
elseif (strpos($_SERVER['REQUEST_URI'], BASE_PATH . 'info/') === 0) {
    
    $id = (int)substr($_SERVER['REQUEST_URI'], strlen(BASE_PATH . 'info/'));
    $controller = new UserController();
    $controller->getone($id);

}

?>