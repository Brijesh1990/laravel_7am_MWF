<?php 
// mktime(00,00,00,date("m"),date("d"),date("y"));
// $tomm=mktime(0,0,0,date("m"),date("d")+1,date("y"));
// echo "Tommarow the date is :".date("d/m/Y",$tomm);


// $tomm=mktime(0,0,0,date("m"),date("d")+7,date("y"));
// echo "Tommarow the date is :".date("d/m/Y",$tomm);

// $tomm=mktime(0,0,0,date("m"),date("d")-7,date("y"));
// echo "Tommarow the date is :".date("d/m/Y",$tomm);


// $tomm=mktime(0,0,0,date("m")-2,date("d")-7,date("y"));
// echo "Tommarow the date is :".date("d/m/Y",$tomm);


$tomm=mktime(0,0,0,date("m")+2,date("d")+15,date("y")+2);
echo "Tommarow the date is :".date("d/m/Y",$tomm);

?>