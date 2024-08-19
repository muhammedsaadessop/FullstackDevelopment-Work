<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 10 Problem 3</title>
</head>
<!-- 3)	Write a PHP Program to create associative array to store product and their price
 -->
<body>
    <?php
    // array(key=>value, key=>value, key=>value);
    $pro_price = array("Mobile"=>30000, "Tablet"=>38832,"LCD"=>782479,"Computer"=>2794);    
    // echo $pro_price['Tablet'];
    foreach($pro_price as $k => $v){
        echo $k." have price of $".$v."<br>";
    }
    ?>
</body>
</html>