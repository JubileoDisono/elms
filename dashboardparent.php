<?php


include('conn.php');
 session_start();	
 $usercheck = $_SESSION['username'];
 
$query = " SELECT  * FROM parent where email = '$usercheck'";
$res = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($res);
$fname = $row['firstname'];
$lname = $row['lastname'];
$email = $row['email'];


?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Parent</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
 <header class="header">
 	

  <div class="header-right">
    <a class="active" href="dashboardparent.php">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
</div>
 </header>
<body>
<div class="row">
	<div class="col-xl-12">
		
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<h4 class="ml-5">Name:<br> <?php echo $fname. " ". $lname;?></h4>
		<h4 class="ml-5">Username:<br> <?php echo $email?></h4>
		

	</div>

</div>
<div class="dropdown show float-right" style="margin-top:-120px">
  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Settings
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="logpage.php">Logout</a>
  
  </div>
</div>
</body>
</html>