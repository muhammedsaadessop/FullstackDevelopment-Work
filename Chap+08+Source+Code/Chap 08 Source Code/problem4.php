<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 08 Problem 4</title>
</head>
<!-- 4)	Write a PHP Program to get starting and ending number from user to generate number 
using for loop -->
<body>
    <form action="" method="get">
        <input type="number" name="s" placeholder="Input starting number">
        <br>
        <input type="number" name="e" placeholder="Input ending number">
        <br>
        <input type="submit" name="sub">
    </form>
    <?php
        if(isset($_GET['sub'])){
            $s = $_GET['s'];
            $e = $_GET['e'];

            if ($s < $e) {
                for($i = $s; $i<=$e; $i++){
                    echo $i."<br>";
                }
            }else{
                echo "Please starting number should be less than ending number";
            }

           

        }
    
    ?>
</body>
</html>