<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DDL Commands</title>
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
    
    // $q = "create database student";
    // mysqli_query($con, $q);

    // $q_std_inf = "create table std_info(
    //     std_id int(10) NOT NULL,
    //     std_name varchar(100),
    //     std_father varchar(100),
    //     std_city varchar(100),
    //     std_marks int(50),
    //     std_status varchar(10),
    //     primary key(std_id)
    // )";
    // mysqli_query($con, $q_std_inf);  
    // $std_q = "alter table std_info add std_country varchar(10)";
    // mysqli_query($con, $std_q);
    // $std_q = "alter table std_info drop std_country";
    // mysqli_query($con,$std_q);

    // $std_q = "alter table std_info modify std_marks varchar(10)";
    // mysqli_query($con,$std_q);
    // $s = "drop table std_info";
    // mysqli_query($con,$s);

    // $s = "truncate table std_info";
    // mysqli_query($con, $s);
    $s = "rename table std_info to my_std";
    mysqli_query($con, $s);
    ?>
</body>
</html>