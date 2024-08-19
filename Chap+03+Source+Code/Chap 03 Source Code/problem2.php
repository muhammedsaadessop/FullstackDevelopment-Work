
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 03 Problem2</title>
</head>
<!-- 2) Write a PHP Program to get a number from user to display its next and previous number
 -->
<form action="" method="get">
    <input type="number" name="num">
    <input type="submit" name="sub">

</form>
<body>
    <?php
    if (isset($_GET['sub'])) {
        $num = $_GET['num'];
        $n = $num + 1;
        $p = $num - 1;
        echo "Your entered Number is ".$num;
        echo "<br>";
        echo "Next Number of your entered Number is ".$n;
        echo "<br>";
        echo "Previous Number of your entered Number is ".$p;

        }
    
    
    ?>
</body>
</html>