<!-- WAP to make a simple calculator using switch case (B)-->

<?php
	$x1=10;
	$x2=5;
	$a='*';
	$result=0;

switch ($a) 
	{
		case '+':
		$result = $x1+$x2;
		break;

		case '-':
		$result =  $x1-$x2;
		break;

		case '*':
		$result =  $x1*$x2;
		break;

		case '/':
		$result =  $x1/$x2;
		break;

		default :
		echo ("Enter  Valid Number");
		break;
	}
	echo ("Result is:".$result);
?>

<!--Result is:50-->
<!--http://localhost/bhavin_153/LAB_3/LAB_3_3.php-->