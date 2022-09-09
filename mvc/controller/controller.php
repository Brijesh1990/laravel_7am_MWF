<?php
require_once("../model/model.php");
class controller extends model 
{
    public function __construct()
    {
        // model statement here
        // $name="hi brijesh";
        // echo $name;
        // w.a.p to print your name take input from user

        if(isset($_POST["sub"]))
        {
            $nm=$_POST["nm"];
            $em=$_POST["em"];
            $mob=$_POST["mob"];
            $msg=$_POST["msg"];
            echo "<h3 align='center' style='color:green'>Hi we are available with this informations :".$nm."<br>".$em."<br>".$mob."<br>".$msg."</h3>";
        }

        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("contact-us.php");
                    break;
                default:
                require_once("index.php");
                require_once("404.php");
                break;
            }
        }

    }
} 

$obj=new controller;
?>