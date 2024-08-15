<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if else if statement</title>
</head>
<body>
    <?php
    $marks = 66;
    if($marks > 90){
        echo "Your grade is A";
    }
    else if($marks > 80){
        echo "Your grade is B";
    }
    else if($marks > 70){
        echo "Your grade is C";
    }
    else if($marks > 60){
        echo "Your grade is D";
    }
    else {
        echo "you are fail...";
    }
    ?>
</body>
</html>