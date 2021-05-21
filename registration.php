<?php

session_start();

$con = mysqli_connect('localhost','root', '');

mysqli_select_db($con, '');

$username = $_POST['username'];
$password = $_POST['password'];

$s = " select * from user where name = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
	echo"Username already taken!";
}else{
	$reg = "insert into user (username, password) values('$username', '$password')";
	mysqli_query($con, $reg);
	echo" Registration Successful";
	header('location: index.php');
	$_SESSION['logged_in']= true;
}

?>