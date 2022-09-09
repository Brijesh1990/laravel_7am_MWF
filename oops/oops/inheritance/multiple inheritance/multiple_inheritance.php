<?php 
// multiple inheritance is not supported in php
class A 
{
    public function display()
    {
        echo "A class property";
    }
}
class B 
{
    public function display1()
    {
        echo "B class property";
    }
}
class C extends A,B
{
    public function display2()
    {
        echo "C class property";
    }
}

$obj=new C;
$obj->display();
$obj->display1();
$obj->display2();
?>