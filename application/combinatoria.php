<?php

function factorial($a)
{
	$result = 1;
	while ($a > 1)
	{
		$result = $result * $a;
		$a--;
	}
	return $result;
}

function combinatoria($m, $n)
{
	return (factorial($m)/factorial(($m-$n)));
}

?>
