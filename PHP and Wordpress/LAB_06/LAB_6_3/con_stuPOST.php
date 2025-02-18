<?php
	if (isset($_POST['submit'])) 
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		
		echo "<h1>Data Retrieved using POST Method:</h1><br>";
		echo "<b>Name:</b>".($name)."<br>";
		echo "<b>Email:</b>".($email)."<br>";
	}
?>
<!-- 
Data Retrieved using POST Method:

Name:Mehul
Email:vanjaniom@gmail.com
 -->