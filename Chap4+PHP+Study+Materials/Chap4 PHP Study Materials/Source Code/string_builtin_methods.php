<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Built in Methods </title>
</head>
<body>
    <?php
    $str = "How are you guys, we are learning PHP Programming...";
    echo strlen($str);
    echo "<br/>";
    echo str_word_count($str);
    echo "<br/>";
    echo strrev($str);
    echo "<br/>";
    echo strpos($str,"PHP");
    echo "<br/>";
    echo str_replace("PHP", "Python",$str);

?>
    
</body>
</html>