<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 09 Problem 7</title>
</head>
<!-- 7)	Write a PHP Program to find area of rectangle 
 -->
<body>
 <!-- formula = lenght * width -->
 <?php
 function area($l, $w){
    $result = $l*$w;
    return $result;
   
 }
$a =  area(30, 20); 
echo $a;
 
 ?>
</body>
</html>