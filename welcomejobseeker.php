<?php
session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: jobseekerlogin.php");
}
   ?>
<!DOCTYPE html>
<html>
<head>
	<title>You are the most welcome</title>
	<link rel="stylesheet" type="text/css" href="Css/welcome2.css">
</head>
<body>
<!-- Welcome message -->
<p class="welcomemsg">We are delighted to have you among us. On behalf of all the members and the management, we would like to extend our warmest welcome and good wishes!We are connecting job seekers and companies and we are hopeful that your talent and experience will land you that dream job you have dreamt forever.</p>
<img src="img/talent.png" class="profilepp">
<p class="name">Welcome</p>
<a href="jobseekerlogin.php"><button class="btn">Sign in</button></a>
</body>
</html>