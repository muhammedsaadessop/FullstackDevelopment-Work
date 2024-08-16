<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHERE Clause with Operators</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $user_pwd = "";
    $db = "student";
    $con = mysqli_connect($servername, $username, $user_pwd, $db);
    
    if(!$con){
        die("Connection is failed". mysqli_connect_error());
    }else {
        echo "Connection is created";
    }

    $std_q = "select * from my_std where std_description like 'f%l' ";
    $std_q_obje = mysqli_query($con,$std_q);
    
    while($std_array = mysqli_fetch_array($std_q_obje)){
        echo $std_array['std_name']."<br/>";
        echo $std_array['std_description']."<br/>";

    }
// x%	find x at start
// %y	find y at end
// %jafri%	find jafri at any position 
// _y%	find y at sencond position 
// y_%	find y at first having at least 2 char length 
// x__%	find x at start having at least 3 char length
// x%y	find x and start and y at end

    ?>
  
</body>
</html>