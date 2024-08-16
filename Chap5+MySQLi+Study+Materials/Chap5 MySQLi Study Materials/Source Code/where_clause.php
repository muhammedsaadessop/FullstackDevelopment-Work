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
    // $std_q = "select * from my_std where std_id not in (10, 11, 12)";
    // $std_q = "select * from my_std where std_id in (10, 11, 12)";
    // $std_q = "select * from my_std where std_marks between 10 and 100";
    $std_q = "select * from my_std where std_marks < 100";

    $std_object = mysqli_query($con, $std_q);

    while($std_array = mysqli_fetch_array($std_object)){
        echo $std_array['std_name']."<br/>";
        echo $std_array['std_marks']."<br/>";

    }

    ?>
  
</body>
</html>