<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable in PHP</title>
</head>
<body>
    <?php
    function test($a, $b){
        return $a + $b;
    }
    $val = test(1,2);
    $num = 10;
    echo $val + $num;
    ?>
</body>
</html>