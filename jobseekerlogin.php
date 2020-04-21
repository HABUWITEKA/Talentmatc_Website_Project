<?php include('serverless.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Job seeker</title>
	<!-- For welcome page and login pages only @style.css -->
	<link rel="stylesheet" type="text/css" href="Css/style.css">
</head>
<body>
	<!-- The rectangle in div to the left -->
	<div class="rectangle">
		<p>No account yet? <a href="jobseekerregister.php">Register</a></p>
	</div>
	<!-- Forms to login as a job seeker -->
	<form id="loginform" method="post">
		<?php include('error.php'); ?>
		<input type="email" name="email1" placeholder="E-mail"><br><br><br>
		<input type="password" name="password1" placeholder="Password"><br><br>
		<input type="submit" name="enter2" value="Enter">
	</form>
    
</body>
</html>