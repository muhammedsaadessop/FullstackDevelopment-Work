<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Argument Types in PHP</title>
</head>
<body>
    <?php
    // one argument
    // two or multiple argument
    // default argument
    function add($a, $b=10){
        echo $a + $b;
    }
    add(10);
    ?>
</body>
</html>