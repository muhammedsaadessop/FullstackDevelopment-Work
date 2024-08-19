<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach Loop in PHP</title>
</head>
<body>
    <?php
    // $num = array(12,3,4,13,54,76,14,13,62);
    // // echo $num[2];
    // foreach($num as $i){
    //     echo $i."<br/>";
    // }
    $marks = array("Faisal "=>43,"Jafri "=>90,"Zamir "=>76);
    foreach($marks as $k=>$v){
        echo $k." = ".$v."<br/>";
    }

    ?>
</body>
</html>