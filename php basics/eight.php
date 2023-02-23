<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eight Document</title>

    <style>
    th,
    td {
        border: 1px solid black;
    }

    table {
        border: 2px solid green;
    }
    </style>
</head>

<body>
    <?php
    $st1 = 1234567890;
    $st2 = 1234567810;
    $st3 = 1234567811;
    ?>

    <table>
        <tr>
            <th>Name of Student</th>
            <th>Enrollment of Student</th>
        </tr>
        <tr>
            <td>Alkesh Rohit</td>
            <td><?php echo $st1 ?></td>
        </tr>
        <tr>
            <td>Krunal Jani</td>
            <td><?php echo $st2 ?></td>
        </tr>
        <tr>
            <td>Himashu Solanki</td>
            <td><?php echo $st3 ?></td>
        </tr>
    </table>
</body>

</html>