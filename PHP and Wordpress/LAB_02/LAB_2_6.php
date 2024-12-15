<!-- WAP TO CONVERT TEMPERATURE FROM FAHRENHEIT TO CELSIUS. (B) -->

<?php
		$p = 55;
		if($p < 40)
		{
			echo "Fail";
		}
		elseif($p > 40 && $p <= 50 )
		{
			echo "Pass Class";
		}
		elseif($p > 50 && $p <= 60)
		{
			echo "Second Class";
		}
		elseif($p > 60 && $p <= 70) 
		{
			echo "First Class";
		}
		elseif($p > 70)
		{
			echo "Distinction";
		}
		else
		{
			echo "a";
		}
?>

<!-- Second Class -->