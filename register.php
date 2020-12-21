

<?php






include('conn.php');
$url= "logpage.php";
if (isset($_POST['btnsub'])) {
 echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$pass = $_POST['password'];
$mob = $_POST['mobile'];
$gender = $_POST['gender'];
$pass1 = mysqli_real_escape_string($conn,$_POST['password']);
$email = $_POST['email'];
$query = "INSERT INTO parent(firstname, lastname, email, mobile_number, password, gender)

VALUES ('$firstname','$lastname','$email', '$mob', '$pass1','$gender')";

mysqli_query($conn,$query);


//Student

$firstnamestud = $_POST['fnamestud'];
$lastnamestud = $_POST['lnamestud'];
$passstud = $_POST['passwordstud'];
$genderstud = $_POST['genderstud'];
$user = $_POST['user'];
$querystudent = "INSERT INTO student(firstname, lastname, gender, username, password) 
VALUES ('$firstnamestud', '$lastnamestud','$genderstud', '$user' ,'$passstud')";
mysqli_query($conn, $querystudent);


	
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

 
 <form method="POST" action="register.php">
 	<div class="row" style="margin-left: 30%;">
 	<div class="float-left mt-5" style="">
 	<h3 style="margin-left: 20px;">Your Information</h3>
  <div class="form-group row">
   
    <div class="col-sm-2">
      <input type="text" class="form-control ml-3" id="staticEmail" style="width: 200px;"  placeholder="Firstname" name="fname" required 
 >
    </div>

  </div>
  <div class="form-group row">
    
    <div class="col-sm-2">
      <input type="text" class="form-control ml-3" style="width: 200px" id="inputPassword" placeholder="Lastname" name="lname" required>

      <input type="text" class="form-control ml-3 mt-3" style="width: 200px" id="staticEmail" placeholder="Username" name="email" required>
       <input type="text" class="form-control ml-3 mt-3" style="width: 200px" id="inputPassword" placeholder="Mobile Number" name="mobile" required>
		<input type="password" class="form-control ml-3 mt-3" style="width: 200px" id="inputPassword" placeholder="Password" name="password" required>  
		<div class="form-check ml-3">
  <input class="form-check-input" type="radio"  id="exampleRadios1" value="Male" name="gender" required>
  <label class="form-check-label" for="exampleRadios1">
    Male
  </label>
</div>
<div class="form-check ml-3">
  <input class="form-check-input" type="radio"id="exampleRadios2" value="Female" name="gender" required>
  <label class="form-check-label" for="exampleRadios2">
    Female
  </label>
</div>

     
     

    </div>
  </div>
</div>



	<div class="float-right mt-5 ">
 	<h3 style="margin-left: 20px;">Student Information</h3>
  <div class="form-group row">
  
    <div class="col-sm-2">
      <input type="text" class="form-control ml-3" style="width: 200px" id="staticEmail" placeholder="Firstname" name="fnamestud" required>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-2">
      <input type="text" class="form-control ml-3" style="width: 200px" id="inputPassword" placeholder="Lastname" name="lnamestud" required>
      
		<div class="form-check ml-3">
  <input class="form-check-input" type="radio" name="genderstud" id="exampleRadios1" value="Male" checked required>
  <label class="form-check-label" for="exampleRadios3">
    Male
  </label>
</div>
<div class="form-check ml-3">
  <input class="form-check-input" type="radio" name="genderstud" id="exampleRadios2" value="Female" required>
  <label class="form-check-label" for="exampleRadios4">
    Female
  </label>

</div>

      

    </div>

  </div>
	<div class="float-right mt-2" style="">
 	<h4 style="">Create account for student</h4>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-2">
      <input type="text" class="form-control " style="width: 200px" id="staticEmail" placeholder="Username" name="user" required >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-2">
      <input type="password" class="form-control" style="width: 200px" id="inputPassword" placeholder="Password" name=" passwordstud" required>
        <button type="submit" class="btn btn-primary mt-3" style="width: 100px" name="btnsub">Sign in</button>

    </div>
  </div>
</div>
</div>


</div>

</form>
</body>
</html>
