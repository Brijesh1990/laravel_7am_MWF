<?php 
// how to find diff b/w date
$t1=mktime(0,0,0,date("m"),date("d"),date("y"));
//echo "Today the date is :".date("d/m/Y",$today);
$t2=mktime(0,0,0,date("m"),date("d")+2,date("y"));
//echo date("d/m/y",$t2);
$diff="The date diff is :".($t2-$t1)/86400;
echo $diff;
?>