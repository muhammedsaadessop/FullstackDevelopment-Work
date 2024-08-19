<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NaN</title>
</head>
<body>
    <?php
    $a = 8;
    $r = acos(8);
    echo var_dump(acos(8));
    echo var_dump(is_nan($r));
    ?>
</body>
</html>