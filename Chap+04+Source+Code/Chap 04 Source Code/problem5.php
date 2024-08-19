<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 4 Problem 5</title>
</head>
<body>
    <!-- 5) Write a PHP Program to get a two string from user to concatenate both.
 -->
    <form action="" method="get">
        <input type="text" name="str1" placeholder="First name">
        <br>
        <input type="text" name="str2" placeholder="Last name">
        <br>
        <input type="submit" name="sub">
    </form>
    <?php
    
    if(isset($_GET['sub'])){
        $str1 = $_GET['str1'];
        $str2 = $_GET['str2'];
        echo "Your first name is ".$str1;
        echo "<br>";
        echo "Your last name is ".$str2;
        echo "<br>";
        echo "Your Full name is ".$str1.$str2;

    }
    
    ?>
</body>
</html>