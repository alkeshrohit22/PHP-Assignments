<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Third Document</title>
</head>
<body>
<?php

function Factorial($n){
	$factorial = 1;
	for ($i = 1; $i <= $n; $i++){
	    $factorial = $factorial * $i;
	}
	return $factorial;
}

$number = 10;
$fact = Factorial($number);
echo "$number Number Factorial is :  $fact";
?>

</body>
</html>