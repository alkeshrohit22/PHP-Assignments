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

        //validation function
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

        // read and upload file at new location
        echo "<table id='demo'>";

        //move the file to specific path
        move_uploaded_file($this->csvFileTemp, "/var/www/html/php/Assignment-9/uploads/" . $this->csvFile);

        //get the newly uploaded file
        $this->csvFileTemp = "/var/www/html/php/Assignment-9/uploads/" . $this->csvFile;

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

    //adding new column and row in csv file
    public function insert_csv()
    {

        $newData = array();
        //array for column data
        $newCsvData = array();

        //name of file
        $nameOffile = $this->csvFile;

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

        //added row in csv file
        $newCsv = fopen($this->csvFileTemp, 'a+');
        fputcsv($newCsv, $newData);
        fclose($newCsv);


        if (($newCsv = fopen($this->csvFileTemp, "r")) !== false) {
            while (($data = fgetcsv($newCsv, 1000, ",")) !== false) {
                $data[] = 'New Column';
                $newCsvData[] = $data;
            }
            fclose($newCsv);
        }

        //added column in csv file
        $newCsv = fopen($this->csvFileTemp, 'w');
        foreach ($newCsvData as $line) {
            fputcsv($newCsv, $line);
        }
        fclose($newCsv);
    }

    public function clientSideDown()
    {
        echo "This funtion called!!!";
        //url path
        $url = $this->csvFileTemp;

        //get file name from url
        $file_name = basename($this->csvFileTemp);

        $info = pathinfo($file_name);

        //check file extension
        if ($info['extension'] == 'csv') {

            header("Content-Description: File Transfer");
            header("Content-Type: text/csv");
            header("Content-Disposition: attachment; filename=\"" . $file_name . "\"");

            readfile($url);
        } else {
            echo "Sorry, that's not a CSV file!!!";
        }

    }
}

if (isset($_POST['submit'])) {

    $csvFile = $_FILES['csv_file']['name'];
    $csvFileTemp = $_FILES['csv_file']['tmp_name'];

    $csvObj = new Validation($csvFile, $csvFileTemp);

    //validation function
    $csvObj->validation();

    if ($csvObj->flag == true) {

        $csvObj->read_csv();
        $csvObj->insert_csv();
        $csvObj->clientSideDown();

    } else {
        echo "<h1>Choose Another File!!!</h1>";
    }
}

?>
