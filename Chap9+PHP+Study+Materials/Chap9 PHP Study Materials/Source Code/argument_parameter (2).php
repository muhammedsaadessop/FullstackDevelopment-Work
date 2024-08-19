<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramter and Argument in PHP</title>
</head>
<body>
    <?php
    function add($a, $b){
        echo $a + $b;
        echo "<br>";
        echo $a - $b;
        echo "<br>";
        echo $a / $b;
        echo "<br>";
        echo $a * $b;
    }
    add(3,4);
    ?>
</body>
</html>