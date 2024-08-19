
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 07 Problem 2</title>
</head>
<!-- 2) Write a PHP Program to get a number from user to find 
its square and cube if number is even -->
<body>
    <form action="" method="get">
        <input type="number" name="x">
        <input type="submit" name="sub">
    </form>
    <?php
    if(isset($_GET['sub'])){
        $x = $_GET['x'];
        if($x%2 === 0) {
            $s_x = $x*$x;
            $c_x = $x*$x*$x;
            echo "Square of your number is ".$s_x;
            echo "<br>";
            echo "Cub of your number is ".$c_x;
        }
        else {
            echo "Number is not even, please try again later.";
        }
    }
    
    
    ?>
</body>
</html>