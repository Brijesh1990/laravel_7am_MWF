<?php 
// this function is used to convert any string in date formate 
echo "Today is a date of :".date("d/m/y")."<br>";

echo "Tommarow a date is :".date("d/m/y",strtotime("+1 day"))."<br>";
echo "after one year a date is :".date("d/m/y",strtotime("+1 year"))."<br>";
echo "after 4 month a date is :".date("d/m/y",strtotime("+4 month"))."<br>";

?>