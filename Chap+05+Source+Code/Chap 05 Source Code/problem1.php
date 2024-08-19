<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 05 Problem 1</title>
</head>
<body>
    <!-- 1) Write a PHP Program to get an angle from user to find its sin, cos, tang
 -->
<form action="" method="get">
    <input type="text" name="angle">
    <input type="submit" name="sub">

</form>
<?php
    if(isset($_GET['sub'])){
        $angle = $_GET['angle'];
        echo "You entered ".$angle;
        echo "<br/>";
        $sin = sin($angle);
        echo "Sin = ".$sin;
        echo "<br/>";
        $cos = cos($angle);
        echo "Cos = ".$cos;
        echo "<br/>";
        $tan = tan($angle);
        echo "Tan = ".$tan;
    }


?>
</body>
</html>