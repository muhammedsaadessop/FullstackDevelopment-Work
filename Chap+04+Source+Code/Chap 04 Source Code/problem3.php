<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 04 Problem 3</title>
</head>

<body>
    <!-- 
        3) Write a PHP Program to get string from user and also get another sub string to find its position from first string

     -->
     
<form action="" method="get">
    <input type="text" name="str" placeholder="Main String">
    <input type="text" name="sub_str" placeholder="Sub String">
    <input type="submit" name="sub">

</form>
    <?php
    if (isset($_GET['sub'])) {
     $main_str =  $_GET['str'];
     $sub_str =  $_GET['sub_str'];
     echo "Main String is ".$main_str;
     echo "<br>";
     echo "Sub String is ".$sub_str;
     $pos = strpos($main_str,$sub_str);
        echo $pos;
    }
    
    ?>
</body>
</html>