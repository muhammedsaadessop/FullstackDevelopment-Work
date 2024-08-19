
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 06 Problem 1</title>
</head>
<body>
    <!-- 
        1) Write a PHP Program to get two number from user to display 
        true / false on the basis of their equality
     -->
     <form action="" method="get">
        <input type="number" name="n1">
        <br>
        <input type="number" name="n2">
        <br>
        <input type="submit" name="sub">

     </form>
    <?php
    if(isset($_GET['sub'])){
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        
        if($n1 == $n2) {
            echo "True"; 
        }
        else {
            echo "False";
        }
    }
   
    
    ?>
</body>
</html>