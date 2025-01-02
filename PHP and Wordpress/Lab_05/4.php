<?php 
	//WAP to print fibonacci series to n hnumber
	function fibonacci1($n)
	{
		$a=0;
		$b=1;
		for($i=0;$i<$n;$i++)
		{
			echo $a." ";
			$next=$a+$b;
			$a=$b;
			$b=$next;
		}
	}
	$n=10;
	fibonacci1($n);
?>