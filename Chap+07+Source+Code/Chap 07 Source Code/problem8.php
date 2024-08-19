
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 07 Problem 8</title>
</head>
<!-- 8) Write a PHP Program to get text, number, submit button from user to display 
such HTML input field using Switch statement. -->
<body>
    <h1>Which type of field you need?</h1>
    <form action="" method="get">
        <input type="text" name="field" id="" placeholder="Enter text, number or submit">
        <input type="submit" name="sub">
    </form>
    <?php
    if(isset($_GET['sub'])){
        $field = $_GET['field'];
    
        switch($field){
            case 'text':
                echo "
                    <form>
                        <input type='text'/>
                    </form>
                ";
            break;
            case 'number':
                echo "
                <form>
                    <input type='number'/>
                </form>
            "; 
            break;
            case 'submit':
                echo "
                <form>
                    <input type='submit'/>
                </form>
            "; 
            break;
            default:
            echo "please enter text, number or submit to get field";  
        }
    }
    ?>
</body>
</html>