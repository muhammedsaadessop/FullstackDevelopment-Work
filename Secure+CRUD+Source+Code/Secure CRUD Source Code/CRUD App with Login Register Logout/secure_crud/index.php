<?php
session_start();

if(!isset($_SESSION['cid'])){
    echo "<script>window.open('login.php','_self')</script>";
} else{

//server, username, user pwd, db name
$servername = "localhost";
$username = "root";
$user_pwd = "";
$db = "customer";
$con = mysqli_connect($servername, $username, $user_pwd, $db);

if(!$con){
    die("Connection is failed". mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Customer Management System</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-width: 100%;
}
.table-title h2 {
    margin: 8px 0 0;
    font-size: 22px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}    
.hint-text {
    float: left;
    margin-top: 6px;
    font-size: 95%;
}    
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Customer <b>Management</b></h2></div>
                    <div class="col-sm-4">
                        <a href="logout.php" role="button" class="btn btn-primary">Logout</a>
                        <a href="profile.php" role="button" class="btn btn-primary">Profile</a>
 
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name <i class="fa fa-sort"></i></th>
                        <th>Email</th>
                        <th>City <i class="fa fa-sort"></i></th>
                        <th>Order</th>
                        <th>Country <i class="fa fa-sort"></i></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $all_customrs = "select * from customer_info";
                            $objects = mysqli_query($con, $all_customrs);
                            while($row = mysqli_fetch_array($objects)){
                                $cid  = $row['cid'];
                                $cname =  $row['cname'];
                                $cemail =  $row['cemail'];
                                $ccity =  $row['ccity'];
                                $corder =  $row['corder'];
                                $ccountry =  $row['ccountry'];

                            
                        ?>
                    
                        <td><?php echo $cid ?></td>
                        <td><?php echo $cname ?></td>
                        <td><?php echo $cemail ?></td>
                        <td><?php echo $ccity ?></td>
                        <td><?php echo $corder ?></td>
                        <td><?php echo $ccountry ?></td>

                        <td>
                            <a href="edit.php?edit=<?php echo $cid; ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="del.php?del=<?php echo $cid; ?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                     <?php } ?>
                </tbody>
            </table>

        </div>
    </div>  
</div>   
</body>
</html>

<?php } ?>