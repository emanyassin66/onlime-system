<?php
	session_start();
	
	$con = mysqli_connect('localhost', 'root', '');

	mysqli_select_db($con, 'barsi');


	$username = $_POST['username'];
	$password = $_POST['password'];

	$s = " select * from user where username = '$username' && password = '$password'";
	 
	$result = mysqli_query($con, $s);

	$num = mysqli_num_rows($result);

	if ($num == 1){

		$_SESSION['logged_in'] = true;
		header("Location: ../student.php");
		$_SESSION['un'] = $username;
		}else{
		header("location:../index.php");
	}
	

?>