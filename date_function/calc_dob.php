<?php 
// how to find diff b/w date
$t1=mktime(0,0,0,date("m"),date("d"),date("y"));
//echo "Today the date is :".date("d/m/Y",$today);
$t2=mktime(0,0,0,date("m"),date("d")+2,date("y"));
//echo date("d/m/y",$t2);
$diff="The date diff is :".($t2-$t1)/86400;
//echo $diff;
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<form meothod="post">
    Select D.O.B >> <input type="date" name="dob"><br><br>
    
    Select Current Date >> <input type="date" name="cdate"><br><br>
    <input type="submit" name="sub" value="Calculate >>">
</form>    
</body>
</html>