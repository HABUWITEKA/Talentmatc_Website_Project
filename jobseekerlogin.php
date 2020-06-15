<?php 
include('serverless.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Job seeker</title>
	<!-- For welcome page and login pages only @style.css -->
	<link rel="stylesheet" type="text/css" href="Css/style.css">
	<link rel="icon" type="image/png" href="img/talent.png" sizes="100x70">
</head>
<body>
	<h1 class="actiontitle">Ready to login</h1>
	<p class="alternative">No Account yet? <span><a href="jobseekerregister.php">Register</a></span></p>
	<!-- Forms to login as a job seeker -->
	<form id="loginform" method="post">
		<?php include('error.php'); ?>
		<label>Email<span>*</span></label><br>
		<input type="email" name="email1" placeholder="E-mail"><br><br>
		<label>Password<span>*</span></label><br>
		<input type="password" name="password1" placeholder="Password"><br><br>
		<input type="submit" name="enter2" value="Enter">
	</form>
    
</body>
</html>