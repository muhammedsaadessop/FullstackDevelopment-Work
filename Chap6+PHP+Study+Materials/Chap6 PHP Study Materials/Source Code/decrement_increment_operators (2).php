<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decrement and Increment Operators</title>
</head>
<body>
    <?php
    $a = 10;
    echo ++$a; // pre increment,
    echo "<br/>"; 
    echo $a++; // post increment, 
    echo "<br/>";
    echo $a;
    
    echo "<br/>";
    $b = 10;
    echo $b--; // post decrement, 9-1 =8
    echo "<br/>";
    echo --$b; // pre decrement,

    ?>
</body>
</html>