<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fifth Document</title>
</head>
<body>
   <div class="container">
     <?php
        echo "<h1>Alkesh's Chess Board</h1>";
        echo "<table border='1px' cellspacing=0px cellpading=0px>";
        for($row = 0; $row < 8; $row ++){
            echo "<tr>";
            for($col = 0; $col < 8; $col ++){
                $sum = $col + $row;
                if($sum % 2 == 0){
                    echo "<td width=60px height=60px bgcolor='black' border='0px'></td>";
                }
                else{
                    echo "<td width=60px height=60px bgcolor='white' border='0px'></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
   </div>
</body>
</html>