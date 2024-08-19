

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 07 Problem 15</title>
</head>
<!-- 15) Write a PHP Program to get number from user to convert into English way
Like 1 should display One, 2 into Two up to 5. -->
<body>
    <form action="" method="get">
        <input type="number" name="x">
        <input type="submit" name="sub">
    </form>
    <?php
        if(isset($_GET['sub'])){
            $x = $_GET['x'];
            switch($x){
                case 1:
                    echo "One";
                break;
                case 2:
                    echo "Two";
                break;
                case 3:
                    echo "Three";
                break;
                case 4:
                    echo "Four";
                break;
                case 5:
                    echo "Five";
                break;
                default:
                    echo "Enter number 1 to 5";
                
            }
        }
    
    ?>
</body>
</html>
