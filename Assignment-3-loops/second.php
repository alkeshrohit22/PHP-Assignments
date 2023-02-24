<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Document</title>
</head>
<body>
    <?php
        $sum = 0;
        for($j = 0; $j <= 20; $j++){
            $sum += $j;
        }

        echo "Sum of 0 to 20 number is : $sum<br />";
    ?>
</body>
</html>