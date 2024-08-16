<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Query Commands</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $user_pwd = "";
    $db = "student";
    $name = "Faisal Jafri";
    $id = 13;
    $con = mysqli_connect($servername, $username, $user_pwd, $db);
    
    if(!$con){
        die("Connection is failed". mysqli_connect_error());
    }else {
        echo "Connection is created";
    }
     
    // $all_std = "SELECT std_name from my_std where std_id = 12";
    $all_std = "SELECT std_name, std_city, std_marks from my_std where std_id = 10";
    // $all_std = "SELECT std_name, std_city, std_marks, std_email, std_country from my_std, my_std2";

    $students = mysqli_query($con, $all_std);

    if($all_std){

        while($user_row = mysqli_fetch_array($students)){
            // echo var_dump($user_row);
            echo $user_row['std_name']."<br/>";
            echo $user_row['std_city']."<br/>";
            echo $user_row['std_marks']."<br/>";

        }

    }

 

    ?>
  
</body>
</html>