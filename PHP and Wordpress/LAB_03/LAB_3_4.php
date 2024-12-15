<!--WAP that prompts to user to enter a leteer and check wheater a letter is a vowel or consonant.(C)-->

<?php
	$letter = "U";
	$vowel = array ('a','e','i','o','u');

	if (in_array($letter,$vowel))
	{
		echo "<p> The letter <b>$letter</b> is a vowel</p>";
	}
	else
	{
		echo "<p> The letter <b>$letter</b> is a consonant</p>";
	}
?>

<!--The letter U is a consonant-->

<!--http://localhost/bhavin_153/LAB_3/LAB_3_4.php-->