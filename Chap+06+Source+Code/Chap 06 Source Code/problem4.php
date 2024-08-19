
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 06 Problem 4</title>
</head>
<!-- 4) Write a PHP Program to get a number from user to use 
all arithmetic assignment operator with that number -->
<body>
    <form action="">
        <input type="number" name="n" placeholder="Enter number">
        <input type="submit" name="sub">
    </form>
    <?php
    $a = 32;  // +=
    echo "At initial value";
    echo "<br>";
    echo "a = ".$a;
    if(isset($_GET['sub'])) {
        $n = $_GET['n'];
        
    $a += $n; // 32 + 1 =>33->$a
    echo "<br>";
    echo "a +=".$n." => ".$a;
    echo "<br>";
    $a -= $n;
    echo "a -=".$n." => ".$a;
    echo "<br>";
    $a /= $n;
    echo "a /=".$n." => ".$a;
    echo "<br>";
    $a *= $n;
    echo "a *=".$n." => ".$a;
    echo "<br>";
    $a %= $n;
    echo "a %=".$n." => ".$a;
    }
    ?>
</body>
</html>