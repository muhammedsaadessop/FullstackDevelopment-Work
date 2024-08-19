<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 4</title>
</head>
<body>
    <!-- 4) Write a PHP Program to get a number from user to display its cub and square simply
 -->
 <form action="#" method="get">
    <input type="number" name="num">
    <input type="submit" name="sub">
 </form>
 <?php
 if(isset($_GET['sub'])){
    $n =  $_GET['num'];
    echo "Square of ".$n." is ".($n*$n);
    echo "<br>";
    echo "Cub of ".$n." is ".($n*$n*$n);

 }
 
 
 ?>
</body>
</html>
