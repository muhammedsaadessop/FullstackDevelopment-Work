

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 07 Problem1</title>
 </head>
 <!-- 1) Write a PHP Program to get 3 number from user to check whether all numbers are
 equal or not -->
 <body>
    <form action="" method="get">
        <input type="number" name="n1" placeholder="1st number">
        <br><br>
        <input type="number" name="n2" placeholder="2nd number">
        <br><br>
        <input type="number" name="n3" placeholder="3rd number">
        <br><br>
        <input type="submit" name="sub">
    </form>
    <?php
    if(isset($_GET['sub'])){
       $n1 =  $_GET['n1'];
       $n2 =  $_GET['n2'];
       $n3 =  $_GET['n3'];
        if($n1 == $n2) {
            if($n2 == $n3) {
                echo "All these three number equal to each other...";
            }
            else{
                echo "Not equal to each other...";
            }
        }
        else{
            echo "Not equal to each other...";
        }
    }
    
    ?>
 </body>
 </html>