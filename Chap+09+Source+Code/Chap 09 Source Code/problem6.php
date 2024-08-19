
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 09 Problem 6</title>
</head>
<!-- 6)	Write a PHP Program to pass number to function find whether number is positive, 
negative or zero -->
<body>
    <?php
        function num($x){
            if($x > 0){
                echo "Number is positive";
            }
            else if ($x < 0){
                echo "Number is negative";
            }
            else {
                echo "Number is zero";
            }
        }
        num(0);
    
    ?>
</body>
</html>