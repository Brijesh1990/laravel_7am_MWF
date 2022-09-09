<?php 
// mktime(00,00,00,date("m"),date("d"),date("y"));
$today=mktime(0,0,0,date("m"),date("d"),date("y"));
echo "Today the date is :".date("d/m/Y",$today);
?>