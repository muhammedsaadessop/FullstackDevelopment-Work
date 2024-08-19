<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 04 Problem1</title>
</head>
<!-- 1) Write a PHP Program to get string from user to find its size -->
<body>
    <form action="" method="get">
        <input type="text" name="str">
        <input type="submit" name="sub" id="">
    </form>
    <?php
    if(isset($_GET['sub'])) {
        $st =  $_GET['str'];
        echo "Your String is "."\"".$st."\"";
        echo "<br>";
        echo "String Lenght is ".strlen($st);

    }
    
    ?>
</body>
</html>