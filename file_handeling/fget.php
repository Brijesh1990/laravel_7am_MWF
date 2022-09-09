<?php 
$file=fopen("shraddha.txt",'r') or die('File does not exist try again');
// if($file)
// {
//     echo "File opened successfully";
// }
// else 
// {
//     echo "Sorry file not exist";
// }

echo fgets($file);


?>