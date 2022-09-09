<?php 
$file=fopen("ajax.txt",'w+') or die("file does not exist");
$txt="ajax stands for asynchrounous javascript and xml";
echo fwrite($file,$txt);

?>