<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 09 Problem 2</title>
</head>
<!-- 
2)	Write a PHP Program to get a number from user to display table of that number 
using function
 -->
<body>
    <form method="get" action="">
        <input type="number" name="x">
        <input type="submit" name="sub">
    </form>
    <!--3 * 1 = 3
        3 * 2 = 6
        3 * 3 = 9 -->
    <?php
    if(isset($_GET['sub'])) {

        function table(){
            $x = $_GET['x'];   // 3  
            for($i = 1; $i<=10;$i++){
                $product = $x*$i;
                echo "$x * $i = $product"."<br>";
            } 
        }
        table();
           
    }
    
    ?>
</body>
</html>