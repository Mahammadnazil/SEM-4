<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Get Method</title>
</head>
<body>
	<form method="get" action="con_stuGET.php" method="get">
    <h1>Student Registraction Form Using GET Method</h1>
		<label for="name">Name:</label>
		<input type="text" name="name">
		<br><br>
		<label for="email">Email:</label>
		<input type="email" name="email">
		<br><br>
		<label for="password">Password:</label>
		<input type="password" name="password">
		<br><br>
		<label for="gender"><b>Gender:</b></label><br>
		<label>Male</label>
		<input type="radio" name="gender" value="Male"><br>
		<label>Female</label>
		<input type="radio" name="gender" value="Female">
		<br><br>	
		<label for="courses"><b>Courses:</b></label><br>
		<label>Civil</label>
		<input type="checkbox" name="courses[]" value="Civil"><br>
		<label>Computer</label>
		<input type="checkbox" name="courses[]" value="Computer"><br>
		<label>Mechnical</label>
		<input type="checkbox" name="courses[]" value="Mechnical"><br><br>
		<input type="submit" name="submit" value="Register">
	</form>
</body>
</html>
