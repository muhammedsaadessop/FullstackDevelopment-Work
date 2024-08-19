<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 09 Problem 3</title>
</head>
<!-- 3)	Write a PHP Program to find factorial of number using function 
 -->
<body>
   <?php
   function fact($number){
 
    $factorial = 1;
    // 10.....5*4*3*2*1 = ?
    for($i = $number; $i>=1; $i--){
        $factorial = $factorial * $i;
        // 1*10 = 10
        // 10 * 9 = 90
        // 90 * 8...
    }
    echo $factorial;

   }
   $number = 15;
   fact($number);
   
   
   ?> 
</body>
</html>