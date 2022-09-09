<?php 
class A 
{
    // public $name="hi i Brijesh";
    public function __construct($a,$b)
    // magic method
    {
        $c=$a+$b;
        echo "Additions of umbers is :".$c;
    }
}
class B extends A 
{
    public function __construct($a,$b)
    {
        $c=$a*$b;
        echo "Multiplications of umbers is :".$c;
    }
}
$obj=new B(2,5);
// $obj->display();

?>