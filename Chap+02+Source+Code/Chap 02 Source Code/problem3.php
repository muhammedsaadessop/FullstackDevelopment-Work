<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 02 Problem3</title>
</head>
<!-- 3) Write a PHP Program to get two number from user to find their square to add both, display final result to user
 -->
<form action="" method="get">
    <input type="number" name="n1" placeholder="Number 1">
    <br>
    <input type="number" name="n2" placeholder="Number 2">
    <br>
    <input type="submit" name="sub">

</form>
<body>
    <?php
   if(isset($_GET['sub'])) {
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $sq_n1 = $n1*$n1;
    $sq_n2 = $n2*$n2;
    $add = $sq_n1 + $sq_n2;
    echo "Square of first number is = ".$sq_n1;
    echo "<br>";
    echo "Square of 2nd number is = ".$sq_n2;
    echo "<br>";
    echo "Addition of both is = ".$add;
   }
    
    
    ?>
</body>
</html>