<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 09 Problem 5</title>
</head>
<!-- 5)	Write a PHP Program to pass marks of user to function to check grade of student.
 -->
<body>
   <?php 
   function grade($m){
    if($m > 90){
        echo "A1"; 
    }
    else if($m > 80){
        echo "A";

    }
    else if ($m > 70){
        echo "B";
    }
    else if ($m >60) {
        echo "C";
    }
    else {
        echo "Fail";
    }
    }


   $marks = 68;
   grade($marks)
   
   
   ?> 
</body>
</html>