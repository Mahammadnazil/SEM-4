<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Post Method</title>
</head>
<body>
	<form action="con_stuPOST.php" method="post">
		<h1>Student Registraction Form Using POST Method</h1>
		<br>
		<label for="name">Name:</label>
		<input type="text" name="name">
		<br><br>
		<label for="email">Email:</label>
		<input type="email" name="email">
		<br><br>
		<label for="password">Password:</label>
		<input type="password" name="password">
		<br><br>
		<input type="submit" name="submit" value="Register">
	</form>
</body>
</html>