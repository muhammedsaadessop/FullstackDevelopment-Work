<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 09 Problem 10</title>
</head>
<!--10)	Write a PHP Program to pass an array to function to display all element 
  -->
<body>
    <?php
    function ar_func($colors){
        foreach($colors as $i){
            echo $i."<br>";
        }
    }
    $c = array("red","green","yellow","black");
    ar_func($c);
    ?>
</body>
</html>