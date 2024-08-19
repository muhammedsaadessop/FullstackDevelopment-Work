
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 07 Problem 6</title>
</head>
<!-- 6) Write a PHP Program to display congratulation.... 
if user marks greater 90 and less than or equal to 100  -->
<body>
    <form action="" method="get">
        <input type="number" name="marks" placeholder="Enter your marks..">
        <input type="submit" name="submit">
    </form>
<?php
   if(isset($_GET['submit'])){
    $marks = $_GET['marks'];
    if($marks > 90 && $marks <=100){ 
        echo "Congratulation.... You are pass..";
    }
    else {
        echo "Sorry, you are fail..";
    }
   } 

?>
</body>
</html>