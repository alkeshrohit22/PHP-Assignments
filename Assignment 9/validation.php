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

    public function validation(){

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
        ?>

    <table id="demo"><?php

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
        ?></table>
    <?php
    }

    // public function insert_csv($newData){

        
    //     // $newData = array(4, 4, 4, 'Y', 1, 1, 1, 'M', 'AddedText');
    //         //array(8, 8, 8, 'N',8, 8, 8, 'w', 'Ahmedabad', 'Guj')

    //     $csv_file = fopen('cities.csv', 'a');

    //     // foreach($pushing_data as $row){
    //     //     print_r( $row);
    //     //     fputcsv($csv_file, $row);
    //     // }
    //     fputcsv($csv_file, $newData);

    //     fclose($csv_file);
    // }
}


if(isset($_POST['submit'])){

    $csvFile = $_FILES['csv_file']['name'];
    $csvFileTemp = $_FILES['csv_file']['tmp_name'];
    
    $csvObj = new Validation($csvFile, $csvFileTemp);
    
    //validation function
    $csvObj->validation();

    if($csvObj->flag == true){
        $csvObj->read_csv($csvFileTemp);
    }else{
        echo"<h1>Choose Another File!!!</h1>";
    }
}
?>

</body>

</html>