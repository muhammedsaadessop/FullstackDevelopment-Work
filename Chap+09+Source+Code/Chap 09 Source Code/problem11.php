<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 09 Problem 11</title>
</head>
<!--  11)	Write a PHP Program to pass string to function to convert into uppercase
-->
<body>
    <form action="" >
        <input type="text" name="user_string">
        <input type="submit" name="sub">
    </form>
    <?php
    if(isset($_GET['sub'])){
        $user_string = $_GET['user_string'];
        str_upper($user_string);

    }
    function str_upper($s){
       $upper_case_user_str =  strtoupper($s);
       echo $upper_case_user_str;
    }
    ?>
    
</body>
</html>