<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COUNT function </title>
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
    echo "<br/>";
    $std_q = "select count(std_city) as city from my_std";

    $std_object = mysqli_query($con, $std_q);

    $std_array = mysqli_fetch_array($std_object);
        echo $std_array['city'];
    

    ?>
  
</body>
</html>