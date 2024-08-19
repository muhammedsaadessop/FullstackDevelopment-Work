

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 07 Problem 5</title>
</head>
<!-- 5) Write a PHP Program to get age of user, to check whether it 
is valid for voting or not if age is greater than 18 or equal. -->
<body>
    <form action="" method="get">
        <input type="number" name="age">
        <input type="submit" name="sub">
    </form>
    <?php
    if(isset($_GET['sub'])){
        $age = $_GET['age'];
        if($age >= 18){
            echo "You are able for voting....";
        }
        else{
            echo "Sorry, you are not able to ...";
        }
    }
    
    ?>
</body>
</html>