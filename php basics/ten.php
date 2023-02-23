<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ten Document</title>
</head>
<body>
    <?php
    
    $num1 = 10;
    $num2 = 20;

    echo "Before Swaping number is <br>";
    echo "Num1 = $num1 and Num2 = $num2  <br>";

    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;

    echo "<br>";
    echo "After Swaping number is <br>";
    echo "Num1 = $num1 and Num2 = $num2  <br>";


    ?>
</body>
</html>