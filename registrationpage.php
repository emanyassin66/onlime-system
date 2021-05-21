
<?php
	session_start();

	if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
		header("Location: index.php");
	}

?>

<html>
<head>
<title> Register</title>
<head>

<body>

<h1>Registration</h1>
<form method ="post" action="registration.php">
	Username:<br/>
	<input type = "text" name="username"><br/>
	Password:<br/>
	<input type="password" name="password"><br/>
	<input type="submit" value="Register">
</form>
</body>
</html>