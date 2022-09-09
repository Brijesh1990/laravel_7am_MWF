<?php
// $this is called pseudo variable i.e used to called variable globally iside of functions 
// $this->name

class AB 
{
    public $name="My name is Priyanka dudhani";
    public function display() 
    {

        echo $this->name;
      
    }
} 

$obj=new AB(); //here new AB() is an object of class AB
$obj->display(); 

?>