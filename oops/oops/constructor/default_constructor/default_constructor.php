<?php 
class A 
{
    public $name="hi i Brijesh";
    public function __construct()
    // magic method
    {
        echo $this->name;
    }
}
$obj=new A;

?>