<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>
		body {
			font-family: Arial, sans-serif;
      
		}

		.container {
			max-width: 500px;
			margin: 0 auto;
      
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		h1 {
			text-align: center;
		}

		.form-group {
			display: block;
			margin-bottom: 10px;
		}

		label {
			display: block;
			margin-bottom: 5px;
		}

		input[type="text"],
		input[type="password"] {
			width: 80%;
			padding: 8px;
			margin-left: 10%;
			margin-right: 10%;
			margin-bottom: 5%;
			font-size: 16px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		input[type="submit"] {
			width: 100%;
			padding: 10px;
			font-size: 16px;
			color: #fff;
			background-color: #007BFF;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		.error-msg {
			text-align: center;
			color: red;
		}
	</style>

</head>
<body>
    
<div class="login">
<?php
error_reporting(E_ALL); // Enable error reporting

require('dbcon.php');
session_start();

if (isset($_POST['username'])){ // Corrected 'username' to 'user_name'

    $user_name = mysqli_real_escape_string($con, $_POST['username']); // Prevent SQL injection
    $password = mysqli_real_escape_string($con, $_POST['password']); // Prevent SQL injection

    $hashed_password = md5($password); // Hash the password (Note: MD5 is not recommended for security, use a stronger hash algorithm)

    $query = "SELECT * FROM `login` WHERE `username`='$user_name' and `password`='$hashed_password'"; // Corrected SQL query
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $rows = mysqli_num_rows($result);
    
    if($rows == 1){
        $_SESSION['username'] = $user_name;
        header("Location: index.html");
    } 
	else {
        echo "<div class='form'>
        <h3>Username/password is incorrect.</h3>
        <br/>Click here to <a href='Login.php'>Login</a></div>";
    }
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
  
</head>
<body>
<div class="login">
    <div class="container">
        <h1>Log In</h1>
        <form action="" method="post" name="login">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required /><br>
                <input type="text" name="password" placeholder="Password" required />
            </div>
            <br>
            <input name="submit" type="submit" value="Login" />
        </form>
    </div>
</div>
</body>
</html>


