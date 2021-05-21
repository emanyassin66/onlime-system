
<?php
	session_start();

	if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
		header("Location: ../index.php");
	}

?>

<html>
<head>
<title> first login</title>
<head>

<body>

<h1>HOOp, let's do this</h1>

<form method ="post" action="login.php">
	Username:<br/>
	<input type = "text" name="username"><br/>
	Password:<br/>
	<input type="password" name="password"><br/>
	<input type="submit" value="Login!">
</form>
</body>
</html>