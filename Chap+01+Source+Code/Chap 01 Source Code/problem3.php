<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 3</title>
</head>
<body>
    <!-- 
3) Write a PHP Program to display structure in this order using escape sequence
Number	Square		Cube
1	    2		    3
2	    4		    27

     -->
        <?php
        
        echo "<pre>Number\tSquare\tCube</pre>";
        echo "<pre>1\t2\t3</pre>";
        echo "<pre>2\t4\t".(3*3*3)."</pre>";
        
        
        ?>
</body>
</html>