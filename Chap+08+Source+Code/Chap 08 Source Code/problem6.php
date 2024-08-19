<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 08 Problem 6</title>
</head>
<!-- 6)	Write a PHP Program to get starting and ending number from user to generate number 
using do while loop -->
<body>
    <form action="" method="get">
        <input type="number" name="s" placeholder="Starting Number">
        <br><br>
        <input type="number" name="e" placeholder="Ending Number">
        <br><br>
        <input type="submit" name="sub">
    </form>
    <?php
    if(isset($_GET['sub'])){
        $s = $_GET['s'];
        $e = $_GET['e'];

        if($s < $e){
            $i = $s;
            do {
                echo $i."<br>";
                $i++;
            }while($i<=$e);


        }else{
            echo "Starting number should be less than ending number";
        }
       

    }
    
    ?>
</body>
</html>