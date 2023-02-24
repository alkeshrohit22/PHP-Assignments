<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenth Document</title>
</head>

<body>
    <h1>PHP program to print table of number</h1>
    <form Method="post">
        <br />
        Enter Table Number you want to print : <input type="text" name="value" /><br><br>
        <input type="submit" name="btn" value="print table" />
        <br>
        <br>

    </form>
    <?php
if (isset($_POST['btn'])) {
    $value = $_POST['value'];
    $total = 0;

    echo "<h3>Table of $value</h3>";
    for ($i = 1; $i <= 10; $i++) {
        $total = $value * $i;
        echo $value;
        echo " * ";
        echo $i;
        echo " = ";
        echo $total;
        echo "<br />";
    }
}
?>
</body>

</html>