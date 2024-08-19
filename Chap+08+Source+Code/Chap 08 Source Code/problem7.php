

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 08 Problem 7</title>
</head>
<!-- 7)	Write a PHP Program to generate number having x number difference, from 1 to 100,
 x number taken from user using while loop -->
<body>
    <form action="" method="get">
        <input type="number" name="x">
        <input type="submit" name="sub">
    </form>
    <?php
    if(isset($_GET['sub'])) {
        $x = $_GET['x'];
        $i = 1; 
        while($i <= 100){
           echo $i."<br>";
           $i += $x;
        }
    }
 
    
    ?>
</body>
</html>