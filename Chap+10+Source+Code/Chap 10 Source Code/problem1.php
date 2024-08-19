<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 10 Problem 1</title>
</head>
<!-- 1)	Write a PHP Program to create an array of student marks to access their marks
 -->
<body>
    
    <?php
    $std_marks = array(90, 43, 66, 100, 99, 97);
    echo "Student Marks is ".$std_marks[2];
    echo "<br>";
    foreach($std_marks as $i){
        if($i > 90){
            echo $i."<br>";
        }
       
    }

    
    ?>
</body>
</html>