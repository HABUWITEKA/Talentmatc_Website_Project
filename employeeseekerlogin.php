<?php include('serverlesscompany.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Employee seeker</title>
	<!-- For welcome page and login pages only @style.css -->
	<link rel="stylesheet" type="text/css" href="Css/style.css">
</head>
<body>
	<!-- The rectangle in div to the left -->
	<div class="rectangle">
		<p>No account yet? <a href="employeeseekerregister.php">Register</a></p>
	</div>
	<!-- Forms to login as an employeer seeker -->
	<form id="loginform" method="post">
		<input type="email" name="email1" placeholder="E-mail"><br><br><br>
		<input type="password" name="password1" placeholder="Password"><br><br>
		<input type="submit" name="enter1" value="Enter">
	</form>
    
</body>
</html>