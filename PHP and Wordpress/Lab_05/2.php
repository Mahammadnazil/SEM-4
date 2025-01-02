<?php
	//WAP to create calculator using all four types of UDF
	
	//using without argument without return type
	echo "<br>";
	echo("without argument without return type");
	echo("<br>");
	function calc(){
		$a=0;
		$b=11;
		echo "Addition is ".($a+$b)."<br>";
		echo "subtraction is ".($a-$b)."<br>";
		echo "Multiplication is ".($a*$b)."<br>";
		if($a==0 || $b==0)
		{
			echo "coud not divide by zero";
		}
		else
		{
			echo "division is ".($a/$b)."<br>";
		}
	}
	calc();

	//Without argument with return type
	echo "<br>";
	echo "Without argument with return type";
	echo "<br>";
	function calc2()
	{
		$a=10;
		$b=10;
		return [
			"add" => $a+$b,
			"Sub" => $a-$b,
			"Mul" => $a*$b,
			"Div" => $a/$b
		];
	}
	$result= calc2();
	foreach ($result as $key => $value) {
		echo "$key = $value<br> ";
	}

	//with argument with return type
	echo "<br>";
	echo "With argument with return type";
	echo "<br>";
	function calc3($a,$b)
	{
		return [
			"add" => $a+$b,
			"Sub" => $a-$b,
			"Mul" => $a*$b,
			"Div" => $a/$b
		];
	}
	$result= calc3( 10,10);
	foreach ($result as $key => $value) {
		echo "$key = $value<br> ";
	}


	//with argument withotu return type

	echo "<br>";
	echo "Wit argument without return type";
	echo "<br>";
	function calc4($a,$b)
	{
		echo "add".($a+$b)."<br>";
		echo "Sub".($a-$b)."<br>";
		echo "Mul".($a*$b)."<br>";
		if($a==0 || $b==0)
		{
			echo "not divicible by zero";
		}
		else
		{
			echo "Div".($a/$b)."<br>";
		}
	}
	$result= calc4(10,10);
?>