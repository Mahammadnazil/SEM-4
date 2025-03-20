<!--10.1 -  Write PHP script to create Account table with Following Field: (AccountNumber, Balance, Branch). (A) -->

<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="bhavin_153";
	$con=mysqli_connect($servername,$username,$password,$database);
	if ($con) 
	{
		echo "Conection successfully.....";
		$query="CREATE TABLE account
			(accountnumber INT AUTO_INCREMENT PRIMARY KEY,
			balance DECIMAL (10,2) NOT NULL ,
			brance VARCHAR (50)NOT NULL)";
		$q=mysqli_query($con,$query);
		if ($q) 
		{
				echo "Account table created successfully.....";
		}
		else
		{
			echo "Account table not created!!!!!!!!!";
		}	
	}
?>

<!-- 
Conection successfully..... 
Account table created successfully.....
-->