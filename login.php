<?php
session_start();
include('conn.php');
$error = "";
$errorpo = "";

if (isset($_POST['btnstud'])) {
	if (empty($_POST['user']) || empty($_POST['passlog'])) {
		$error="Username or password is invalid";
	}

	else
	{
		$user = mysqli_real_escape_string($conn,$_POST['user']);
$passlog = mysqli_real_escape_string($conn,$_POST['passlog']);
$query = "SELECT * FROM student where username = '$user' and password = '$passlog'";
$res = mysqli_query($conn, $query);
$rows = mysqli_num_rows($res);
$name = mysqli_fetch_assoc($res);
$fname = $name['firstname'];
$lname = $name['lastname'];

if ($rows==1) {
	
	$_SESSION['username'] = $user;
	$_SESSION['pass'] = $passlog;
	
	header("location:dashboard.php");
}
else
{
	$error = "Password or Email is incorrect";
}
	}
}

if (isset($_POST['btnparent'])) {
	if (empty($_POST['userparent']) || empty($_POST['passparent'])) {
		$errorpo="Username or password is invalid";
	}

	else
	{
		$user = mysqli_real_escape_string($conn,$_POST['userparent']);
$passlog = mysqli_real_escape_string($conn,$_POST['passparent']);

$query = "SELECT * FROM parent where email = '$user' and password = '$passlog'";
$res = mysqli_query($conn, $query);
$rows = mysqli_num_rows($res);


if ($rows==1) {
	$_SESSION['username'] = $user;
 
	header("location:dashboardparent.php");
}
else
{
	$errorpo = "Password or Email is incorrect";
}
	}
}


?>