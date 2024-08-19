
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 06 Problem 3</title>
</head>
<!-- 3) Write a PHP Program to get a number from user to display even if positive 
otherwise display odd. -->
<body>
    <form action="">
        <input type="number" name="n">
        <input type="submit" name="sub">
    </form>
    <?php
    if(isset($_GET['sub'])){
        $n = $_GET['n']; // 9 % 2 ===1
        if ($n % 2== 0) {
            echo $n." is Even Number";
        }else{
            echo $n." is Odd Number";
        }
    }
    
    ?>
</body>
</html>