<?php

include('conn.php');
 session_start();	
 $usercheck = $_SESSION['username'];


$query = " SELECT firstname, lastname FROM student where username = '$usercheck'";
$res = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($res);
$fname = $row['firstname'];
$lname = $row['lastname'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style1.css">
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
 <header class="header">
 	

  <div class="header-right">
    <a class="active" href="dashboard.php">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
</div>
 </header>
<body>
<div class="row">
	<div class="col-xl-12">
		<h1 class="text-center">Welcome</h1>
		<div class="dropdown show float-right" style="margin-top:-50px">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Settings
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="logpage.php">Logout</a>
  
  </div>
</div>
	</div>

</div>
<div class="row">
	<div class="col-xl-12">
		<h1 class="text-center"><?php echo $fname. " ".$lname; ?></h1>
	</div>

</div>










<div class="row" style="margin-left: 20%;">
	<div class="col-8"> 
<div style="margin-top: 200px;">
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   ACTIVITY
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">COLOR</a>
    <a class="dropdown-item" href="letters.php">LETTER</a>
    <a class="dropdown-item" href="#">NUMBERS</a>
    <a class="dropdown-item" href="#">Educational Videos</a>


  </div>
</div>
</div>
</div>
<!-- <div class="col"> 
<div style="margin-top: 200px;margin-right:px;width: 10%;">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">COLOR</a>
    <a class="dropdown-item" href="#">LETTER</a>
    <a class="dropdown-item" href="#">NUMBERS</a>
    <a class="dropdown-item" href="#">Educational Videos</a>


  </div>
</div>
</div>
</div> -->
<div class="col"> 
<div style="margin-top: 200px;">
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   QUIZZES
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">COLORS</a>
    <a class="dropdown-item" href="#">LETTER</a>
    <a class="dropdown-item" href="#">NUMBERS</a>
 


  </div>
</div>
</div>
</div>
</div>
</body>

</html>