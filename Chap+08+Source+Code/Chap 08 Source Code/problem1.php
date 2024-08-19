<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 08 Problem 1</title>
</head>
<!-- 1)	Write a PHP Program to generate 1 to 10 only odd and even number using for loop
 -->
<body>
    <?php
    echo "Odd number";
    echo "<br>";
    for($i = 1; $i<=10; $i++){
        if ($i%2 != 0) { // 7%2 == 1
            echo "<b>".$i."<b><br>";
        } 
    }
     echo "<br>"; 
    for($i = 1; $i<=10; $i++){
        if ($i%2 == 0) { // 6%2 == 0
            echo "<b>".$i."<b><br>";
        } 
    }
    
    ?>
</body>
</html>