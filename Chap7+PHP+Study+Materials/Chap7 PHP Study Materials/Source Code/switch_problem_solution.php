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
    $char = 'y';
    switch($char){
        case 'A':
        case 'a':
            echo "It is vowel";
        break;

        case 'E':
        case 'e':
            echo "It is vowel";
        break;
        case 'I':
        case 'i':
            echo "It is vowel";
        break;
        case 'O':
        case 'o':
            echo "It is vowel";
        break;
        case 'U':
        case 'u':
            echo "It is vowel";
        break;

        default:
            echo "It is not a vowel character...";
    }

    ?>
</body>
</html>