<?php 
// A multiple parent class property will access by its one child class there we used multiple inheritance but in php its not supported so we used interface there.

// What are Interfaces? Interfaces allow you to specify what methods a class should implement. Interfaces make it easy to use a variety of different classes in the same way. 

// in interface a class property access by another class by implements
interface A 
{
    public function display();
}
interface B 
{
    public function display1();
}
interface C 
{
    public function display2();
}
class D implements A,B,C
{
    public function display()
    {

        echo "A class property"."<br>";
    }
    public function display1()
    {

        echo "B class property"."<br>";
    }
    public function display2()
    {

        echo "C class property"."<br>";
    }
}
$obj=new D;
$obj->display();
$obj->display1();
$obj->display2();

?>