<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch statement</title>
</head>
<body>
    <?php
    $x = 'B';
    switch($x){
    case 'A':
        echo "This is A";
    break;
    
    case 2:
        echo "TWO";
    break;

    case 3:
        echo "Three";
    break;

    default:
        echo "No match...";
    }

    ?>
</body>
</html>