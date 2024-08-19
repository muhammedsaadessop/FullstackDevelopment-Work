
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 05 Problem 2</title>
</head>
<!-- Write a PHP Program to get two number for a, b, display their arithmetic result 
in this format a+b=result; -->
<body>
    <form action="" method="get">
        <input type="number" name="n1" placeholder="a value">
        <br>
        <input type="number" name="n2" placeholder="b value">
        <br>
        <input type="submit" name="sub">
    </form>
    <?php
    if(isset($_GET['sub'])){
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        echo "a = ".$n1;
        echo "<br>";
        echo "b = ".$n2;
        echo "<br>";
        echo "a + b = ".$n1+$n2;
        echo "<br>";
        echo "a - b = ".$n1-$n2;
        echo "<br>";
        echo "a / b = ".$n1/$n2;
        echo "<br>";
        echo "a * b = ".$n1*$n2;
        echo "<br>";
        echo "a % b = ".$n1%$n2;
        
    }
    
    ?>
</body>
</html>