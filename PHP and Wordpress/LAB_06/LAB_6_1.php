<?php
	function sum($n)
	{
		if ($n == 0) 
		{
			return 0;
		}
		return $n + sum ($n - 1);
	}
$result = sum(5);
echo "<b>The sum of the first $n number is :</b> $result";
?>
<!-- The sum of the first number is : 15 -->