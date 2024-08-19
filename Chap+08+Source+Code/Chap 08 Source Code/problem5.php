
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 08 Problem 5</title>
</head>
<!-- 5)	Write a PHP Program to get starting and ending number from user to generate 
number using while loop -->
<body>
    <form action="" method="get">
        <input type="number" name="s">
        <br><br>
        <input type="number" name="e">
        <br><br>
        <input type="submit" name="sub">
    </form>
    <?php
    if(isset($_GET['sub'])){
        $s = $_GET['s'];
        $e = $_GET['e'];

        if($s < $e){
            $i = $s;
            while($i<=$e){
                echo $i."<br>";
                $i++;
            }
        }else{
            echo "Starting number should be less than ending number";
        }
       

    }
    
    ?>
</body>
</html>