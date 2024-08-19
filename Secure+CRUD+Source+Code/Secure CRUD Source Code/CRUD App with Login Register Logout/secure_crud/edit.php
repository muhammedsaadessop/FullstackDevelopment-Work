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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php 
        if(isset($_GET['edit'])){
            $id = $_GET['edit'];
            $query = "select * from customer_info where cid = '$id' ";
            $obj = mysqli_query($con, $query);
            while($row = mysqli_fetch_array($obj)){
                $cname =  $row['cname'];
                $cemail =  $row['cemail'];
                $cpwd =  $row['cpwd'];
                $ccity =  $row['ccity'];
                $corder =  $row['corder'];
                $ccountry =  $row['ccountry'];
                $cimg =  $row['cimg'];

         
        
        ?>

        <form method="post" action="" enctype="multipart/form-data">
            <div class="modal-header">
                <h4 class="modal-title">Update Profile</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="cname" value="<?php echo $cname;?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="cemail" value="<?php echo $cemail;?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="cpwd" value="<?php echo $cpwd;?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" name="ccity" value="<?php echo $ccity;?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Order</label>
                    <input type="text" name="corder" value="<?php echo $corder;?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Country</label>
                    <input type="text" name="ccountry" value="<?php echo $ccountry;?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Picture</label>
                    <input type="file" name="cimg" class="form-control">
                    <img src="img/<?php echo $cimg;?>" alt="" width="80" height="80">
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" name="update" class="btn btn-success" value="Update">
            </div>
        </form>
                <?php }} ?>
</div>

<?php 
if(isset($_POST['update'])){
    $cname =  $_POST['cname'];
    $cemail =  $_POST['cemail'];
    $cpwd =  $_POST['cpwd'];
    $ccity =  $_POST['ccity'];
    $corder =  $_POST['corder'];
    $ccountry =  $_POST['ccountry'];
    $cimg =  $_FILES['cimg']['name'];
	$cimg_temp =  $_FILES['cimg']['tmp_name'];

	move_uploaded_file($cimg_temp, "img/$cimg");

    $update_user = "update customer_info set cname='$cname', cemail='$cemail', cpwd='$cpwd', ccity='$ccity',corder='$corder',ccountry='$ccountry',cimg='$cimg' where cid='$id'";
    if (mysqli_query($con, $update_user)){
        
        echo "<script>window.open('index.php', '_self')</script>";
        exit();
    }

}


?>
</body>
</html>
<?php } ?>