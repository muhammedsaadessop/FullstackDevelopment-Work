<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 08 Problem3</title>
</head>
<!-- 3)	Write a PHP Program to generate 1 to 10 only odd and even number using do while loop.
 -->
<body>
    <?php
    $i = 1;
    do {
        if($i%2==0){
            echo $i."<br>";
        }
        $i++;
    }
    while($i<=10);
    

    $x = 1;
    do {
        if($x%2==1){
            echo $x."<br>";
        }
        $x++;
    }
    while($x<=10);
    
    ?>
</body>
</html>