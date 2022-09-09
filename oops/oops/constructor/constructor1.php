<?php
class hitesh 
{
    public $name="hi constructor";
    public function hitesh()
    {
       echo $this->name;
    }
} 

$obj=new hitesh();
$obj->hitesh();
?>