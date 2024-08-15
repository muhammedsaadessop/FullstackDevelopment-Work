<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinity Number</title>
</head>
<body>
    <?php
    echo PHP_FLOAT_MAX;
    $x = 5;
    echo var_dump(is_infinite(log(0)));
    echo "<br/>";
    echo var_dump(is_infinite(3));
    echo "<br/>";
    echo var_dump(is_infinite(4000)); 
    echo "<br/>";
    echo var_dump(is_finite(log(0)));
    echo "<br/>";
    echo var_dump(is_finite(3));
    echo "<br/>";
    echo var_dump(is_finite(4000)); 
    
    ?>
</body>
</html>