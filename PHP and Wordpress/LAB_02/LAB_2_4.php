<!-- WAP TO ND GREATER NUMBER FROM 3 NUMBERS (B) -->
<?php
		$a=100;
		$b=200;
		$c=300;


		if($a > $b && $a > $c && $a!=$b && $a!=$c)
		{
			echo("$a is Greaterthan $b,$c");
		}
		else  if($b > $a && $b > $c) 
		{
			echo("$b is Greaterthan $a,$c");
		}
		else
		{
			echo("$c is Greaterthan $a,$b");
		}
		
?>

<!-- 300 is Greaterthan 100,200 -->