<?php
function sumOfPrimes($n)
{
	
	$prime = array_fill(0, $n + 1, true);
	for ($p = 2; $p * $p <= $n; $p++)
	{
		if ($prime[$p] == true)
		{
    		for ($i = $p * 2; $i <= $n; $i += $p)
			$prime[$i] = false;
		}
	}

	$sum = 0;
	for ($i = 2; $i <= $n; $i++)
		if ($prime[$i])
			$sum += $i;
	return $sum;
}

$n = 200;
echo "Sum of Prime number till 200: ".sumOfPrimes($n) ;

?>