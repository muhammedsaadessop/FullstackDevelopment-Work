<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 04 Problem 4</title>
</head>
<body>
    <!-- 4) Write a PHP Program to get string from user, to replace one with another
 -->
    <form action="" method="get">
        <input type="text" name="main_str" placeholder="Main String">
        <br>
        <input type="text" name="find" placeholder="Find">
        <br>
        <input type="text" name="replace" placeholder="Replace with">
        <br>
        <input type="submit" name="sub">
    </form>
    <?php
    if(isset($_GET['sub'])) {

       $main_str =  $_GET['main_str'];
       $find =  $_GET['find'];
       $replace =  $_GET['replace'];
       $new_main_str = str_replace($find, $replace, $main_str);
       echo "Your string is ".$main_str;
       echo "<br>";
       echo "You are looking for ".$find;
       echo "<br>";
       echo "Replacement string ".$replace;
       echo "<br>";
       echo "After Replacing main string";
       echo $new_main_str;

    }
    
    ?>
</body>
</html>