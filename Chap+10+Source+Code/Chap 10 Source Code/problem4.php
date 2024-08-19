<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 10 Problem 4</title>
</head>
<!-- 4)	Write a PHP Program to create an array of student marks to sort descending order
 -->
<body>
    <?php
    $marks = array(13,10,300,500,1022,433,545,123,651);
    rsort($marks);
    foreach($marks as $i){
        echo $i."<br>";
    }
    
    ?>
</body>
</html>