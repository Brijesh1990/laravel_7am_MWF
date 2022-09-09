<?php
//object is an instance of class i.e called object
// object is definded same name of class by new keyword  

class AB 
{
    public function display() 
    {

        $name="Hi i am using oops with object examples";
        echo $name;
    }
} 

$obj=new AB(); //here new AB() is an object of class AB
$obj->display(); 

?>