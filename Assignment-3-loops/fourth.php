<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ten Document</title>
</head>

<body>
    <h2>Write a program which will count the “t” characters in the text
“techstudy”</h2>
    <?php

        $text = "techstudy";
        $searchWord = "t";
        $count = 0;

        for ($x = 0; $x < strlen($text); $x++) {
            if (substr($text, $x, 1) == $searchWord) {
                $count = $count + 1;
            }
        }
        echo "<h4>Number of 't' character in text is :  $count</h4>";
        ?>
</body>

</html>