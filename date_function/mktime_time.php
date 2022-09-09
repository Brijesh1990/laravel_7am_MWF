<?php 
date_default_timezone_set("Asia/Calcutta");
$tomm=mktime(date("h"),date("i"),date("s"),date("m"),date("d"),date("y"));
echo "Tommarow the date is :".date("d/m/Y h:i:s a",$tomm);

?>