
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 07 Problem 9</title>
</head>
<!-- 9) Write a PHP Program to get a password from user, 
length should be equal or greater than 10 char -->
<body>
   <form method="post" action="">
      <input type="password" name="pass">
      <input type="submit" name="sub">  
   </form> 
   <?php
   if(isset($_POST['sub'])){
        $pwd = $_POST['pass'];
        $lenght = strlen($pwd);
        if($lenght >= 10) {
            echo "Your password is okay";
        }
        else {
            echo "Your password is not okay, it should be greater than or equal to 10 char.";
        }
   }
   
   ?>
</body>
</html>