<?php 
include('login.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Elms</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style1.css">
	
</head>
<body>
	
<!-- <form>

				<h1 style="margin-left: 30px;">Student Login</h1>
	
		
		
	
  <div class="form-group row" >

		<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-2">
	
			<input type="text"  class="form-control" id="staticEmail" placeholder ="email@example.com">


	

    </div>
  </div>
  <div class="form-group row">

  	
  					<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
 
  				 <div class="col-sm-2">
  	
  					<input type="password" class="form-control" id="inputPassword" placeholder="Password">


     </div>
       
    </div>
  </div>
</div>


</form>
 -->



 
 <form method="POST">
 	<div class="row md-6 offset-md-3" >
 	<div class="float-left mt-5" style="margin-left: 15%">
 	<h1 style="margin-left: 30px;">Student Login</h1>
 <div class="row">
    <div class="col-sm-10 ml-3x   ">
      <?php echo "<p style='color:red;background-color:white;'>$error</p>"  ?>
    </div>
  </div>
  <div class="form-group row">

    <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>

    <div class="col-sm-2">

      <input type="text" class="form-control ml-3" id="staticEmail" style="width: 200px;" name="user" placeholder="juandcruz">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-2">
      <input type="password" class="form-control ml-3" style="width: 200px" id="inputPassword" name="passlog">
  
      <button type="submit" class="btn btn-primary ml-3 mt-3" style="width: 100px" name="btnstud">Sign in</button>
   
      <p style="width: 100px" class="ml-3"><a href="register.php" class="text-success bg-light">Create new account</a></p>

<p style="width: 100px" class="ml-3"><a href="parentlogin.php" class="text-success bg-light">Login as a Parent</a></p>
    </div>
  </div>
</div>





</div>

</form>


</body>
</html>