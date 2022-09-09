<?php 
// inheritance is used to used one class property with another class i.e called inheritance
// inheritance is used to access one class property with another class i.e called inheritance
// inheritance used by extends keyword

class A 
{
    public function display()
    {
        echo "This is a class A property"."<br>";

    }
}
class B extends A 
{
    public function display1()
    {
        echo "This is a class B property";

    }
}
class C extends B 
{
    public function display2()
    {
        echo "This is a class C property";

    }
}

class D extends C 
{
    public function display3()
    {
        echo "This is a class D property";

    }
}
$obj=new D;
$obj->display();
$obj->display1();
$obj->display2();
$obj->display3();
?>