<?php
$servername = "localhost";
$username = "root";
$user_pwd = "";
$dbName = "mydbtest";


$con = mysqli_connect($servername, $username, $user_pwd, $dbName);

if(!$con){
    die("Connection is failed". mysqli_connect_error());
}else {
    echo "Connection is created";
}
?>
 