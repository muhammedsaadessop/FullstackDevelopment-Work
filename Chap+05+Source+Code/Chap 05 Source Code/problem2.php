<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 05 Problem 2</title>
</head>
<body>
    <!-- 2) Write a PHP Program to get degree from user to convert into radian also radian to degree
 -->
<form action="" method="get">
    <input type="text" name="degree" Placeholder="Enter Degree">
    <input type="text" name="radian" Placeholder="Enter Degree">

    <input type="submit" name="sub">
</form>
<?php
if(isset($_GET['sub'])){
    $degree = $_GET['degree'];
    $radian = $_GET['radian'];

    $rad = deg2rad($degree);
    $deg = rad2deg($radian);
    echo "Degree is converted radian that is ".$rad;
    echo "<br>";
    echo "Radian is converted Degree that is ".$deg;

}

?>
</body>
</html>