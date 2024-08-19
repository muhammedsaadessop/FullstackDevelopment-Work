
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- 
11) Write a PHP Program to get a marks from user to display grade according to 
given criteria
90 >  <= 100 A+
80 > A
70 > B
60 > C
50 > D
Fail

 -->
 <form action="" method="get">
    <input type="number" name="marks" placeholder="Enter your marks">
    <input type="submit" name="sub">
 </form>
 <?php
    if(isset($_GET['sub'])){
        $marks  = $_GET['marks']; 
        if($marks > 90 && $marks <= 100) {
            echo "Your grade is A+";
        }
        else if($marks > 80) {
            echo "Your grade is A";
        }
        else if($marks > 70) {
            echo "Your grade is B";
   
        }
        else if($marks > 60) {
            echo "Your grade is C";
   
        }
        else if($marks > 50) {
            echo "Your grade is D";
   
        }
        else {
            echo "Fail";
   
        }
        
    }
 
 
 ?>
<body>
    
</body>
</html>