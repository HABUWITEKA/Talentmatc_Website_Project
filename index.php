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
	   <p class="watchme">Learn more about Talent Match</p>
	   <p class="motto">Your talent is just a click away!</p>
	   <iframe src="promo.mp4"
   width="650" height="360" frameborder="0" allowfullscreen autoplay=1></iframe>
	</div>
	<div class="button-container">
	<!-- buttons to choose from if u are seeking employees or jobs -->
    <a href="jobseekerlogin.php"><button class="btn">I am a jobseeker</button></a>
    <a href="employeeseekerlogin.php"><button class="btn">I am a company</button></a>
    <a href="#" onclick="alert('We are coming soon!')"><button class="btn trainerbtn">I am a trainer</button></a>
    </div>
</body>
</html>