<!-- 7.1 - WAP to demonstrate server side validation for name, email, mobile number. (A)  -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">
		<label for="name">Name:</label>
		<input type="text" name="name"><br>

		<label for="email">Email:</label>
		<input type="text" name="email"><br>

		<label for="phone">phone:</label>
		<input type="text" name="phone"><br>

		<input type="submit" name="submit">
	</form>

<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$error=[];

		if (!preg_match("/^[a-zA-Z ]{2,20}$/",$name)) 
		{
			$errors[]="Name is invalid";
		}

		if (!preg_match("/^[\w\-\.]+@([\w\-]+\.)+[a-zA-z]{2,7}$/", $email)) 
		{
			$errors[]="Email is invalid";
		}

		if (!preg_match("/^\d{10}$/", $phone)) 
		{
			$errors[]="Phone is invalid";
		}

		if(empty($errors))
		{
			echo "Validation Complete";
		} 
		else 
		{
			foreach ($errors as $error)
			{
				echo "$error";
			}
		}
	}

?>

</body>
</html>