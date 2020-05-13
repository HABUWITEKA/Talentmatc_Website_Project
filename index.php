<!DOCTYPE html>
<html>
<head>
	<title>Welcome to TalentMatch</title>
	<!-- For welcome page and login pages only @style.css -->
	<link rel="stylesheet" type="text/css" href="Css/style.css">
	<link rel="icon" type="image/png" href="img/talent.png" sizes="100x70">
</head>
<body>
	<!-- The rectangle in div to the left -->
		<div class="rectanglevideo">
		<!-- <img src=""> -->
	   <img class="ourlogo" src="img/talent.png">
	   <p class="motto">Your talent is just a click away!</p>
	   <iframe src="http://www.youtube.com/embed/W7qWa52k-nE"
   width="650" height="360" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="button-container">
	<!-- buttons to choose from if u are seeking employees or jobs -->
    <a href="jobseekerlogin.php"><button class="btn">Enter as a jobseeker</button></a>
    <a href="employeeseekerlogin.php"><button class="btn">Enter as an employer</button></a>
    <a href="#" onclick="alert('We are coming soon!')"><button class="btn trainerbtn">Enter as a trainer</button></a>
    </div>
</body>
</html>