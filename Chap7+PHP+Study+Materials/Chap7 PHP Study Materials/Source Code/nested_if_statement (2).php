<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nested if statement</title>
</head>
<body>
    <?php
    $num = 10;
    if($num%2 ==0){
        if($num%3 == 0){
            echo "Number is divisble by 2 and 3";
        }
        else {
            echo "Number is not divisbile by 3";
        }
    }
    else {
        echo "Number is not divisble by 2";
    }
    ?>
</body>
</html>