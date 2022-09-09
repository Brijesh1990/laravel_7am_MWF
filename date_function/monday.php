<?php 
echo "today is a day :".date("D")."<br>";
echo "today is a day :".date("l")."<br>";
echo "today is a day :".date("F")."<br>";
echo "Brijesh birthday on 19th october 1990 is a day is :".date("l",mktime(0,0,0,19,10,1990));
?>