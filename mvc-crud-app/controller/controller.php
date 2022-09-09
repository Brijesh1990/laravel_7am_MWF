<?php
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
      //load your templates here or view here
      if(isset($_SERVER["PATH_INFO"]))
      {
        switch($_SERVER["PATH_INFO"])
        {
           case '/':
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("content.php");
            require_once("footer.php");
            require_once("login.php");
            break;

            default:
            require_once("index.php");
            require_once("header.php");
            require_once("navbar.php");
            require_once("404.php");
            require_once("footer.php");
            break; 
        }
    }   

    }
} 
$obj=new controller;
?>