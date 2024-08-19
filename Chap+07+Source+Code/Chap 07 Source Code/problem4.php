
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 07 Problem 4</title>
</head>
<!-- 4) Write a PHP Program to get two number from user to check whether equal or not using if else, if numbers are equal to 
each other than ask user to input your name. -->
<body>
    <form action="" method="get">
        <input type="number" name="n1">
        <br>
        <input type="number" name="n2">
        <br>
        <input type="submit" name="sub" value="Check">
    </form>
    <?php
    if(isset($_GET['sub'])){
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        if($n1 == $n2) {
            echo "
                <form action='' method='post'> 
                <input type='text' name='username' placeholder='Please enter your name'>
                <input type='submit' name='submit'>
                </form>
            ";
            if(isset($_POST['submit'])){
                $name =  $_POST['username'];
                echo "Hi, Your name is ".$name;
            }
        }
        else {
            echo "Sorry, numbers are not equal to each other...";
        }
    }
    
    ?>
</body>
</html>