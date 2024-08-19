<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break and Continue with Loop</title>
</head>
<body>
    <?php
        for($i=1; $i<=10; $i++){
            if($i == 3){
                continue;
            }
            echo $i."<br/>";
        }
        echo "Using while loop";
        $n = 0;
        while($n<=10){
            if($n == 6){
                break;
            }
            echo $n."<br/>";
            $n++;
        }  

    ?>
</body>
</html>