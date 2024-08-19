<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Array in PHP</title>
</head>
<body>
    <?php
    // $marks = array(
    //     array(1,2,3,4,5),
    //     array(3,4,5,65),
    //     array(0,10,20)
    // );
    // echo $marks[2][0];
    $marks = array(
        array("Faisal"=>100),
        array("jafri"=>2000),
        array("zamir"=>400)
    );
    echo $marks[0]["Faisal"]
     ?>
</body>
</html>