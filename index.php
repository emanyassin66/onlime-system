<?php
	session_start();
	if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false) {
		header("Location: loginpage.php");
		
	}
?>

<h2>You have logged in</h2>

<form method ="post" action="logout.php">
	<input type="submit" value="Logout">
</form>