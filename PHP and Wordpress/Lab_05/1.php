<?php
	//WAP to create user define function for print your name and call it using all user define function
	
	//using without argument and without return type
	echo("Without argument wihout return type");
	echo("<br>");
	function printname() 
	{
		echo "Nazil Mathakiya<br>";
	}
	printname();

	//With argument without return type
	echo("With argument wihout return type");
	echo("<br>");
	function printname1($name) 
	{
		echo "$name"."<br>";
	}
	printname1('Nazil Mathakiya');

	//Without argument with return type
	echo("Without argument with return type");
	echo("<br>");
	function printname2() 
	{
		return "Nazil Mathakiya"."<br>";
	}
	echo printname2();


	//With argument with return type
	echo("With argument with return type");
	echo("<br>");
	function printname3($name) 
	{
		 return  "$name";
	}
	 echo printname3('Nazil Mathakiya');
?>