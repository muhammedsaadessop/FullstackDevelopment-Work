<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 02 Problem 1</title>
</head>
<body>
<!-- 1) Write a PHP Program to make use of constant, verify that its value did not change
 -->
    <?php
    $language = "PHP";
    $language = "Python";
    echo $language;

    define("Language","PHP");
    define("Language","Python");

    echo Language;

    
    ?>
</body>
</html>