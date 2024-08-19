
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 09 Problem 1</title>
</head>
<!-- 1)	Write a PHP Program to find addition / subtraction division and multiplication 
using function -->
<body>
    <?php
    function math($a, $b){
        echo "a = ".$a;
        echo "<br>";
        echo "b = ".$b;
        echo "<br>";
        echo "a + b = ".($a+$b);
        echo "<br>";
        echo "a - b = ".($a-$b);
        echo "<br>";
        echo "a * b = ".($a*$b);
        echo "<br>";
        echo "a / b = ".($a/$b);

    }  
    math(3,5);
    
    
    ?>
</body>
</html>