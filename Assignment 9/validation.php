<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display CSV</title>

    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    h1 {
        margin-left: 500px;
        color: green;
    }
    </style>
</head>

<body>

    <?php

class Validation
{
    public $csv_data = array();
    public function __construct()
    {
        if (isset($_POST['submit'])) {

            $csv_file = $_FILES['csv_file'];

            if ($csv_file['error'] == 0 && pathinfo($csv_file['name'], PATHINFO_EXTENSION) == 'csv') {
                echo "<h1>Dispaying CSV File</h1>";

            } else {
                echo "<h1>Choosing Wrong File</h1>";
            }
        }
    }

    public function read_csv()
    {
        ?>

    <table id="demo"><?php

        //Open Csv File
        $stream = fopen("cities.csv", "r");

        $first = true;
        
        echo "<table border='1px'>";
        while (($row = fgetcsv($stream)) !== false) {
            echo "<tr>";
            if ($first) {
                foreach ($row as $col) {echo "<th>$col</th>";}
                $first = false;
            } else {foreach ($row as $col) {echo "<td>$col</td>";}}
            echo "</tr>";
        }
        echo "</table>";

        fclose($stream);
        ?></table>
    <?php
}
}

$csvobj = new Validation();

$csvobj->read_csv();
?>

</body>

</html>