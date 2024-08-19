
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 07 Problem 12</title>
</head>
<!-- 12) Write a PHP Program to get two number from user, if their addition result positive 
then welcome message should display -->
<body>
    <form action="" method="get">
        <input type="text" name="n1">
        <br><br>
        <input type="text" name="n2">
        <br><br>
        <input type="submit" name="sub">

    </form>
    <?php
    if(isset($_GET['sub'])){
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $addition = $n1 + $n2;
        echo "Your addition result is ".$addition;
        echo "<br>";
        if($addition > 0) { // 
            echo "Welcome....";

        } else{
            echo "Number is negative";
        }
    }
    
    ?>
</body>
</html>