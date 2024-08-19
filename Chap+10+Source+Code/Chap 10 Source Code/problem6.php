<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 10 Problem 6</title>
</head>
<!-- 6)	Write a PHP Program to reverse array element
 -->
<body>
   <?php
//     $colors = array("Green","Yellow","Pink","Black","Blue","Gold");
//     $r_colors = array_reverse($colors);
//    foreach($r_colors as $c){
//     echo $c."<br>";
//    }

    $num = array(2,34,54,16,1,6,7,12);
    $r_num = array_reverse($num);
    foreach($r_num as $n){
        echo $n."<br>";

    }
   ?> 
</body>
</html>