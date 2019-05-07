<!DOCTYPE html>
<html>
<head>
	<title> Login Page </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="behria_mosque.jpg">
<div id="frm" >
	<form action="process.php" method="POST">
		<p >
			<label>&nbsp;&nbsp;&nbsp;&nbsp;Username:</label>
		<input type="text" id="user" name="user" required placeholder="Username" class="input">
	   </p>
	   <p class="alert alert_danger">
			<label>Password:</label>
		<input type="Password" id="pass" name="pass" required placeholder="Password" class="input">
	   </p>
		 <p>
  <input type="submit" id="btn" value="Login" class="btn btn-primary">
	   </p>
	</form>
	
</div>

<div id="frm">
	<h3 id="HThree"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New user Create Account?</h3>
	<form action="cAccount.html" method="POST">
		  <input type="submit" id="btn" value="Create Account" class="btn btn-primary">

	</form >
</div>
</body>
</html>