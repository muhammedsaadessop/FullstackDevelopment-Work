<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 07 Problem 10</title>
</head>
<!-- 10) Write a PHP Program to get a string from user which contain only 5 words
 -->
<body>
    <form action="" method="get">
        <input type="text" name="str">
        <input type="submit" name="sub">
    </form>
    <?php
        if(isset($_GET['sub'])){
           $str = $_GET['str']; 
           $words = str_word_count($str);
           if($words == 5){
            echo "String is okay";
           }else{
            echo "Please enter string which only contain five word";
           }
        }

    ?>
</body>
</html>