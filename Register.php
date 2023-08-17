<?php

if (isset($_POST['submit'])) {
    $usersname=$_POST['user_name'];
    $pass=$_POST['password'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
  
  

    
   
    if ($usersname !="" && $pass !="" && $email !="" && $mobile !="") {
        
    
    $sql="INSERT INTO users(user_name,password,email,mobile)
     VALUES('$usersname','$pass','$email','$mobile')";
include_once('dbcon.php');
$query=mysqli_query($con,$sql) or die("data inserted successfully");
if ($query) {
    echo "$usersname Register successfull";

    header("Location: index.php");
}
    }
    else {
        echo "please fill all details";
    }

}
?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
<head>

	<title>POS SYSTEM</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
</head>
<body style="background:url('images/fresh_snow.png')">

	<center>
		<h1>Hospital Management</h1>
	</center>

	<div class="content" style="width: 500px">

		<form method="POST">

		<table class="table table-bordered table-responsive " >
			<tr>
			  <td><label for="username">Usename</label></td>
			  <td><input type="text" autocomplete="off" name="user_name" class="form-group" required></td>
			</tr>
			<tr>
				<td><label for="password">Password</label></td>
				<td><input type="password" name="password" required></td>
			</tr>
      <tr>
				<td><label for="email">Email</label></td>
				<td><input type="email" name="email" required></td>
			</tr>
      <tr>
				<td><label for="mobile">Mobile</label></td>
				<td><input type="text" name="mobile" required></td>
			</tr>
     
     

		</table>
    

		<input type="submit" name="submit" class="btn btn-primary btn-large" value="Register">
    <a href="index.php">Login</a>
    

   

	</form>

		
	</div>
 
</body>
</html>