
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 08 Problem 2</title>
</head>
<!-- 2)	Write a PHP Program to generate 1 to 10 only odd and even using while loop
 -->
<body>
    <?php
    echo "<h2>Even numbers..</h2><br>";
    $i = 1;
    while($i<=10){
        if($i%2 == 0){
            echo $i."<br>";
        }
        $i++;
    }
    echo "Odd numbers..<br>";
    $n = 1;
    while($n<=10){
        if($n%2 == 1){
            echo $n."<br>";
        }
        $n++;
    }
    
    
    ?>
</body>
</html>