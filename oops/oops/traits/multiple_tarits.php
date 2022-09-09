<?php 
// PHP only supports single inheritance: a child class can inherit only from one single parent.

//So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

//Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

trait A 
{
    public function display()
    {
        echo "This is a Brijesh"."<br>";
    }
}
trait B 
{
    public function display1()
    {
        echo "This is a charmi"."<br>";
    }
}
trait C 
{
    public function display2()
    {
        echo "This is a Jayesh"."<br>";
    }
}

class D
{
    use A,B,C;
}
$obj=new D; 
$obj->display();
$obj->display1();
$obj->display2();



?>