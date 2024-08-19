<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 07 Problem 13</title>
</head>
<!-- 13) Write a PHP Program to get number of rows to generate table. (up to 5)
 -->
<body>
    <form action="" method="get">
        <input type="number" name="num">
        <input type="submit" name="sub">
    </form>
    <?php
    if(isset($_GET['sub'])){
        $n = $_GET['num'];
        switch($n){
            case 1:
                echo "
                    <table border='1'>
                        <tr>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        </tr>
                    </table>
                ";
            break;
            case 2:
                echo "
                    <table border='1'>
                        <tr>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        </tr>
                        <tr>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        </tr>
                    </table>
                ";
            break;
            case 3:
                echo "
                    <table border='1'>
                        <tr>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        </tr>
                        <tr>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        </tr>
                        <tr>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        </tr>
                    </table>
                ";
            break;
            case 4:
                echo "
                    <table border='1'>
                        <tr>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        </tr>
                        <tr>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        </tr>
                        <tr>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        </tr>
                        <tr>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        <td>... </td>
                        </tr>
                    </table>
                ";
            break;
        case 5:
            echo "
                <table border='1'>
                <tr>
                <td>... </td>
                <td>... </td>
                <td>... </td>
                <td>... </td>
                <td>... </td>
                </tr>
                    <tr>
                    <td>... </td>
                    <td>... </td>
                    <td>... </td>
                    <td>... </td>
                    <td>... </td>
                    </tr>
                    <tr>
                    <td>... </td>
                    <td>... </td>
                    <td>... </td>
                    <td>... </td>
                    <td>... </td>
                    </tr>
                    <tr>
                    <td>... </td>
                    <td>... </td>
                    <td>... </td>
                    <td>... </td>
                    <td>... </td>
                    </tr>
                    <tr>
                    <td>... </td>
                    <td>... </td>
                    <td>... </td>
                    <td>... </td>
                    <td>... </td>
                    </tr>
                </table>
            ";
            break;
            default:
            echo "Provide number from 1 to 514) Write a PHP Program to get age and name from user to display sentence like this one
            Hi user, you are age year old!
            ";
    }
    }

    ?>
</body>
</html>