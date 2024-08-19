
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 07 Problem 3</title>
</head>
<!-- 3) Write a PHP Program to get num1, num2 and char (+-/*%) 
to perform on num1 and num2 using switch -->
<body>
    <form action="" method="get">
        <input type="text" name="num1" placeholder="Enter number 1">
        <br>
        <input type="text" name="num2" placeholder="Enter number 2">
        <br>
        <input type="text" name="op" placeholder="Enter Operator (+ - / * %)">
        <br>
        <input type="submit" name="cal">
    </form>    
<?php
    if(isset($_GET['cal'])){
    $num1 = $_GET['num1']; 
    $num2 = $_GET['num2']; 
    $op = $_GET['op']; 

    switch($op){
        case '+':
            echo "Num1 + Num2 = ".($num1+$num2);
        break;
        case '-':
            echo "Num1 - Num2 = ".($num1-$num2);
        break;  
        case '/':
            echo "Num1 / Num2 = ".($num1/$num2);
        break;  
        case '*':
            echo "Num1 * Num2 = ".($num1*$num2);
        break;  
        case '%':
            echo "Num1 % Num2 = ".($num1%$num2);
        break;
        default:
            echo "Please enter a valid operator";
    }
    }


?>
</body>
</html>