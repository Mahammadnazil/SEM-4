<!--WAP to  calculate electricity bill using control structure .
for first 50 unit Rs 3.50/Unit,
for next 100 unit - Rs 4.00/Unit,
for next 100 unit - Rs 5.20/Unit,
 for next 250 unit - Rs 6.50/Unit -->

<?php
	$unit=175;
	$bill;

	if ($unit <= 50) 
	{
		$bill = $unit *3.50;
	}

	elseif ($unit <= 150)
	{
		$bill = 50 * 3.50 + ($unit - 50) * 4;
	}

	elseif ($unit <= 250)
	{
		$bill = 50 * 3.50 + 100 * 4 + ($unit - 150) * 5.20 ;
	}
	else
	{
		$bill = 50 *3.50 + 100 * 4 + 100 * 5.20 + ($unit - 250) * 6.50 ;
	}
	echo ("Ans is : $bill");
?>
<!--Ans is : 705-->
<!--http://localhost/bhavin_153/LAB_3/LAB_3_5.php-->
