

<?php

include 'connect.php';



if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$password = $_POST['password'];


}

// $sql = "insert into `crud` (`name`,`email`,`mobile`,`password`) VALUES('$name','$email','$mobile','$password')";

$sql = "INSERT INTO `crud`(`name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$password')";

$result = mysqli_query($con,$sql);

if($result){

	echo "data inserted sucessfully";
}else{
	echo die(mysqli_error($con));
}



 ?>

















<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<title>crud</title>
</head>
<body>
<div class="container my-5">

  <h2>crudapp</h2>
  
	
<form role="form" method="post">

  <div class="form-group">
    <label >name</label>
    <input type="text" class="form-control"  placeholder="enter your name" name="name" autocomplete="off">
  </div>

<div class="form-group">
    <label >email</label>
    <input type="email" class="form-control"  placeholder="enter your email" name="email" autocomplete="off">
  </div>
  <div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control"  placeholder="enter your mobile number" name="mobile" autocomplete="off">
  </div>
  <div class="form-group">
    <label >password</label>
    <input type="text" class="form-control"  placeholder="enter your password" name="password" autocomplete="off">
  </div>


  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>

</div>

            
  

</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_table_bordered&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:54 GMT -->
</html>















<?php



















?>