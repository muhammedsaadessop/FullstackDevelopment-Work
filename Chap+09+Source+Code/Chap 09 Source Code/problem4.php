
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 09 Problem 4</title>
</head>
<!-- 4)	Write a PHP Program to pass age of user as parameter to a function to check whether 
user is eligible for vote or not. -->
<body>
    <?php
    function vote($age){
        if($age >= 18){
            echo "You are eligible";
        }
        else {
            $year = 18-$age; 
            echo "Sorry, you are not eligible but after $year year you will be...";
        }
    }
    $user_age = 20;
    vote($user_age);

    ?>
</body>
</html>