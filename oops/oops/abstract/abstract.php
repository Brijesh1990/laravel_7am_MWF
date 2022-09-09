<?php
// abstract class : An abstract class is same name of the class but when we create any class as abstract we never create the instance of abstract class or we never create an object of abstract class.

//abstract class is used by it's inheritance  

abstract class  A 
{
    public function display()
    {
        echo "This is an examples of abstract class"."<br>";
    }
}

class B extends A 
{
    public function display1()
    {
        echo "yah we used abstract class by inheritance";
    }

}
$obj=new B;
$obj->display();
$obj->display1();

?>