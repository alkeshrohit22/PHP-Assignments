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

            $this->flag = true;
        } else {
            echo "<h1>Choosing Wrong File</h1>";
            $this->flag = false;
        }
    }

    public function read_csv()
    {

        // read and upload file at new location

        //move the file to specific path
        move_uploaded_file($this->csvFileTemp, "uploads/" . $this->csvFile);

        //get the newly uploaded file
        $this->csvFileTemp = "uploads/" . $this->csvFile;

        //Open Csv File
        $stream = fopen($this->csvFileTemp, "r");

        $first = true;

        while (($row = fgetcsv($stream)) !== false) {
            echo "<tr>";
            if ($first) {
                foreach ($row as $col) {echo "<th>$col</th>";}
                $first = false;
            } else {foreach ($row as $col) {echo "<td>$col</td>";}}
            echo "</tr>";
        }
        fclose($stream);

    }

    //adding new column and row in csv file
    public function insert_csv()
    {

        $newData = array();
        //array for column data
        $newCsvData = array();

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
