<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions</title>
</head>
<body>
    <?php
    $a = 10;
    echo var_dump(is_finite($a));
    echo "<br/>";

    $min = min(10,20,3,42,54);
    echo $min;
    echo "<br/>";

    $max = max(10,20,3,42,54);
    echo $max;
    echo "<br/>";

    $s_num = sqrt($a);
    echo $s_num;
    echo "<br/>";

    $r_num = round(4.454);
    echo $r_num;
    echo "<br/>";

    echo tan(0.4);
    echo "<br/>";

    echo cos(03);
    echo "<br/>";

    echo sin(0.4);
    echo "<br/>";

    echo abs(-4.5);
    echo "<br/>";

    echo var_dump(is_nan($a));
    echo "<br/>";
    echo rad2deg(43);
    echo "<br/>";
    echo deg2rad(10);
    
    ?>
</body>
</html>
