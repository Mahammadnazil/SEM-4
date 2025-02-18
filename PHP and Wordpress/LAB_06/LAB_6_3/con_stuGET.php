<?php
	if (isset($_GET['submit'])) 
	{
		$name=$_GET['name'];
		$email=$_GET['email'];
		$gender=$_GET['gender'];
		$courses=$_GET['courses'];

		echo "<h1>Data Retrieved using GET Method:</h1><br>";
		echo "<b>Name:</b>".($name)."<br>";
		echo "<b>Email:</b>".($email)."<br>";
		echo "<b>Gender:</b>".($gender)."<br>";
		echo "<b>Courses:</b>".(implode(',',$courses))."<br>";
	}
?>
<!-- 
Data Retrieved using GET Method:

Name:Mehul
Email:vanjaniom@gmail.com
Gender:Male
Courses:Civil,Computer
-->