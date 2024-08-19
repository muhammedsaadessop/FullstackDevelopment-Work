

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 05 Problem 5</title>
</head>
<body>
    <!-- 5) Write a PHP Program to get two number from user to find their cubes,add both, 
get another number which divide cube result and after division, 
final result display to user -->
<form action="" method="get">
    <input type="number" name="n1" placeholder="first number">
    <br>
    <input type="number" name="n2" placeholder="2nd number">
    <br>
    <input type="number" name="x" placeholder="another number">
    <br>
    <input type="submit"  name="sub">

</form>
    <?php
    if (isset($_GET['sub'])){
        $n1 = $_GET['n1']; // 2
        $n2 = $_GET['n2']; // 3
        $n1_cube = $n1 * $n1 * $n1;  // 8
        $n2_cube = $n2 * $n2 * $n2; // 27
        $add = $n1_cube + $n2_cube; //35
        $x = $_GET['x']; // 2
        $result = $add/$x; // 35/2 = 17.5
        echo "Final Result = ".$result;

    }
    
    ?>
</body>
</html>