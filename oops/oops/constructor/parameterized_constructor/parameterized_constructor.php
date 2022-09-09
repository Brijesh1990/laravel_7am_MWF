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
$obj=new A(20,50);

?>