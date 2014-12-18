<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/common.php');

if(isset($_GET['controller']) && !empty($_GET['controller'])){
          $controller =$_GET['controller'];
}else{
          $controller ='home';  //default controller
}

if(isset($_GET['function']) && !empty($_GET['function'])){
          $function =$_GET['function'];
}else{
          $function ='init';    //default function
}

$controller=strtolower($controller);

$fn = SITE_ROOT.'controller/'.$controller . '.php';
if(file_exists($fn)){
    require_once($fn);
    $controllerClass=$controller.'Controller';
    if(!method_exists($controllerClass,$function)){
        die($function .' function not found');
    }

    $obj=new $controllerClass;
    $obj-> $function();
}else{
    die($controller .' controller not found');
}
?>
