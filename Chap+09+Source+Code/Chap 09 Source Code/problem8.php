<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 09 Problem 8</title>
</head>
<!-- 8)	Write a PHP Program to convert time into second 
 -->
<body>
    <form action="" method="get">
        <input type="number" name="h"  placeholder="Write Hour">
        <br><br>
        <input type="number" name="m" placeholder="Write Minutes">
        <br><br>
        <input type="number" name="s" placeholder="Write Seconds">
        <br><br>
        <input type="submit" name="sub">
    </form>
<?php
    if(isset($_GET['sub'])){
        $h = $_GET['h'];
        $m = $_GET['m'];
        $s = $_GET['s'];
        echo "<br>";
        // 1 hour = 3600s => 60 * 60
        $sec = ($h * 3600) + ($m * 60) + $s;
        echo "Total time in to seconds ".$sec;

    }

    
    ?>
</body>
</html>