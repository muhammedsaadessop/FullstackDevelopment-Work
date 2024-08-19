<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 08 Problem 8</title>
</head>
<!--8)	Write a PHP Program to generate number having x number difference, from 1 to 100, 
x number taken from user using do while loop -->
<body>
    <form action="" method="get">
        <input type="number" name="x" placeholder="Input difference No. between 2 number">
        <input type="submit" name="sub">
    </form>
    <?php
    if(isset($_GET['sub'])) {
        $x = $_GET['x'];
        if($x == 0){
            echo "x value should not be zero and negative";
        }else{
            $i = 1;
            do {
                echo $i."<br>";
                $i += $x;
            } while($i <= 100);
        }
   
    }
 
    
    ?>
</body>
</html>