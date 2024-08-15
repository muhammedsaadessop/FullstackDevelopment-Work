<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 20;
    $c = 30;
    $d = 15;
    //  && will return true when both statement are true
    //  && will return false when any statement is false
    echo var_dump( ($a < $b) && ($c > $d )); // true
 
    //  || will return true when any statement is treu
    echo var_dump( ($a > $b) || ($c < $d )); // true
 
    echo var_dump (!($a < $b)); // 
 
    //  xor will return true when any statement is true, if both true, then it will return false
    echo var_dump( ($a < $b) xor ($c > $d )); // true
 

 

    ?>
</body>
</html>