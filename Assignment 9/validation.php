<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display CSV</title>

    <link rel="stylesheet" href="validation.css">
</head>

<body>

    <?php

class Validation
{
    private $csvFile;
    public $csvFileTemp;
    public $flag = false;

    public function __construct($csvFile, $csvFileTemp)
    {
        $this->csvFile = $csvFile;
        $this->csvFileTemp = $csvFileTemp;
    }

    public function validation()
    {

        $csv_file = $_FILES['csv_file'];
        if ($csv_file['error'] == 0 && pathinfo($csv_file['name'], PATHINFO_EXTENSION) == 'csv') {
            echo "<h1>Dispaying CSV File</h1>";
            $this->flag = true;
        } else {
            echo "<h1>Choosing Wrong File</h1>";
            $this->flag = false;
        }
    }
    
    public function read_csv()
    {
        echo "<table id='demo'>";

        //move the file to specific path
        move_uploaded_file($this->csvFileTemp, "/var/www/html/php-practice/uploads/" . $this->csvFile);    

        //get the newly uploaded file
        $this->csvFileTemp = "/var/www/html/php-practice/uploads/" . $this->csvFile;

        //Open Csv File
        $stream = fopen($this->csvFileTemp, "r");

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
        echo "</table>";
    }

    public function insert_csv()
    {
        $newData = array();

        //name of file
        $nameOffile = $this->csvFile;

        //echo ''
        //condition which data have to insert in which file
        if ($nameOffile == 'biostats.csv') {
            $newData = array('Alkesh', 'M', 21, 75, 168);
        } elseif ($nameOffile == 'cities.csv') {
            $newData = array(42, 7, 7, 'N', 8, 8, 8, 'W', 'Gandhinager', 'Gujarat');
        } elseif ($nameOffile = 'airtravel.csv') {
            $newData = array('FEB-1', 700, 500, 600);
        } else {
            echo "<h3 class='warning'>You have to choose only this three file.(biostats.csv, cities.csv, airtravel.csv) </h3>";
        }

        echo "<h1 class='newh1'>Updated New Data into CSV file</h1>";

        //print_r($newData);die('test');
        //echo "csvFileTemp" . $this->csvFileTemp; die('test');
        $newCsv = fopen($this->csvFileTemp, 'a+');
        fputcsv($newCsv, $newData);
        fclose($newCsv);
    }

    public function clientSideDown()
    {
        // header("Content-Description: File Transfer");
        // header("Content-Type: application/octet-stream");
        // header("Content-Disposition: attachment; filename=\"". $this->csvFileTemp . "\"");
        echo "File successfully uploaded";

        // readfile(basename($this->csvFileTemp));
    }
}

if (isset($_POST['submit'])) {

    $csvFile = $_FILES['csv_file']['name'];
    $csvFileTemp = $_FILES['csv_file']['tmp_name'];

    $csvObj = new Validation($csvFile, $csvFileTemp);

    //validation function
    $csvObj->validation();

    if ($csvObj->flag == true) {

        $csvObj->read_csv($csvFileTemp);

        $csvObj->insert_csv();

        $csvObj->read_csv($csvFileTemp);

        $csvObj->clientSideDown();

    } else {
        echo "<h1>Choose Another File!!!</h1>";
    }
}
?>

</body>

</html>