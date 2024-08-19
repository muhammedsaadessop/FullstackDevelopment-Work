<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 10 Problem 2</title>
</head>
<!-- 2)	Write a PHP Program to create array to iterate array element 
 -->
<body>
    <?php
    $ar = array(90,10,30,4,61,54,13);
    // foreach($ar as $i){
    //     echo $i."<br>";
    // }

    for($i = 0; $i <= 5; $i++){
        if($ar[$i]%2 == 0 ){
            echo $ar[$i]."<br>"; // echo $ar[2]

        }
    }
    
    ?>
</body>
</html>