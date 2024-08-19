<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 09 Problem 9 </title>
</head>
<!--9)	Write a PHP Program to pass a string to function to reverse
  -->
<body>
    <form action="" method="get">
        <input type="text" name="user_string">
        <input type="submit" name="sub">
    </form>
    <?php
    if(isset($_GET['sub'])){
        $user_string = $_GET['user_string'];
        str_rev($user_string);
       
        }
       
        function str_rev($s){
            $rev_str = strrev($s);
            echo $rev_str;
        }

  
    
    ?>
</body>
</html>