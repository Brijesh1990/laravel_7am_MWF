<?php 
abstract class A 
{
    public function __construct()
    {
        echo "Hi brijesh"."<br>";
    }
}

class B extends A 
{
    public function display()
    {
        echo "Hi rupesh";
    }
}
$obj=new B;
$obj->display();
?>