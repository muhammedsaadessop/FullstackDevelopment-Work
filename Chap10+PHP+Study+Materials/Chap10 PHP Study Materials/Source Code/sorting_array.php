<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Array in PHP</title>
</head>
<body>
    <?php
    // $marks = array(310,260,130,740,120,430);
    // rsort($marks);
    // foreach($marks as $i){
    //     echo $i."<br>";
    // }
    
    $marks = array("Faisal"=>100, "Jafri"=>200,"Zamir"=>90,"John"=>323);
    // arsort($marks); // on value,
    krsort($marks); // on key,
    foreach($marks as $key=>$val){
        echo $key."=".$val."<br>";
    }

     ?>
</body>
</html>