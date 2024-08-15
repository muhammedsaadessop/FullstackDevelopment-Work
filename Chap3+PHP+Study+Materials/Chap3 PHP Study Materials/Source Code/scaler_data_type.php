<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Type</title>
</head>
<body>
    <h1>Data types in PHP</h1>
    <?php
        $s = 'Faisal';
        $s1 = "Faisal 'jAFRI' ZAMIR";
        $s2 = 'Faisal "jAFRI" ZAMIR';
        $age = 34;
        echo "<br/>";
        echo "Your age is $age";
        echo "<br/>";
        echo $s2;
        // echo $s;
        echo "<br/>";
        echo strlen($s);
        echo "<br/>";
        echo str_word_count($s1);
        echo "<br/>";
        echo strrev($s2);

        $num = 34;
        $price = 34.54;
        echo "<br/>";
        echo var_dump($num);
        echo var_dump($price);

        $val = FALSE; # 1
        echo $val;
        $a = 2;
        $b = 2;
        echo ($a==$b);

    ?>
</body>
</html>