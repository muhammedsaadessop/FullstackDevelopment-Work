

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 07 Problem 14</title>
</head>
<!-- 14) Write a PHP Program to get age and name from user to display sentence like this one
Hi user, you are age year old! -->
<body>
    <form action="" method="get">
        <input type="text" name="user" placeholder="Username">
        <br> <br>
        <input type="text" name="age" placeholder="Age">
        <br> <br>
        <input type="submit" name="sub">
    </form>
    <?php
        if(isset($_GET['sub'])) {
            $age = $_GET['age'];
            $user = $_GET['user'];
            echo "Hi $user, you are $age year old! ";
        }
    
    ?>
</body>
</html>
