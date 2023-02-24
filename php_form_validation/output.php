<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Document</title>
</head>
<body>
    <h1>Output of from is : </h1>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email']; 
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $technology = $_POST['technology'];
        $role = $_POST['role'];


        echo $name ;
        echo "<br />";
        echo $email;
        echo "<br />";
        echo $age;
        echo "<br />";
        echo $gender;
        echo "<br />";
        echo $technology;
        echo "<br />";
        echo $role;
        echo "<br />";
    }
?>
</body>
</html>