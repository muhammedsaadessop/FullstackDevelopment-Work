<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 07 Problem 07</title>
</head>
<!-- 7) Write a PHP Program to get number, to check number is positive, negative or zero
 -->
<body>
    <form action="" method="get">
        <input type="number" name="num">
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_GET['submit'])){
        $num = $_GET['num'];
        if($num > 0){ // 77, 78, 88, 193, 8434 ,53, 
            echo $num." is the Positive Number";
        }
        else if($num < 0) {
            echo $num." is the Negative Number";
        }
        else {
            echo "Zero Number";
        }
    }
    
    ?>
</body>
</html>