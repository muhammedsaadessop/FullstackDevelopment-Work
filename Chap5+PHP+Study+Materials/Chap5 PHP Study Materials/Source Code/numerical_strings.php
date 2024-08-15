<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeric String</title>
</head>
<body>
    <?php
    $a = "jafri";
    echo is_numeric($a);
    $b = 34;
    // echo $a + $b;
    $val = "3434.34";
    echo var_dump($val);
    echo var_dump(is_numeric($val));
    ?>
</body>
</html>