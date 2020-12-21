
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
  <form method="POST">
      <div class=" mt-5" style="margin-left: 30%;">
  <h1 style="margin-left: 17%;">Parent Login</h1>
  <div class="row">
    <div class="col-sm-5 ml-5 " >
      <?php echo "<p style='color:red;background-color:white;margin-left:130px; text-align: center;'>$errorpo</p>"  ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-2">
      <input type="text" class="form-control ml-3" style="width: 200px" id="staticEmail" name="userparent" placeholder="johndoe23" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-2">
      <input type="password" class="form-control ml-3" style="width: 200px" id="inputPassword" name="passparent">
    
       <button type="submit" class="btn btn-primary ml-3 mt-3" style="width:100px" name="btnparent">Sign in</button>
  <p style="width: 100px" class="ml-3"><a href="index.php">I'm a Student</a></p>
    </div>
  </div>
</div>
  </form>
</body>
</html>