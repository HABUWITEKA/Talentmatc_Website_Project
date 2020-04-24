<!DOCTYPE html>
<html>
<head>
	<title>Admin - Panel</title>
	<link rel="icon" type="image/png" href="img/talent.png">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<script type="text/javascript" src="admin.js"></script>
</head>
<body>
<div class="menubar">
	<a href="#" onclick="jobseeker(); activatelink1()" style="cursor: progress;"><img src="img/talent.png" class="logo"></a>
	<nav>
	<a href="#" id="link1" class="active" onclick="jobseeker(); activatelink1()">Job seekers</a>
	<a href="#" id="link2" onclick="company(); activatelink2()">Companies</a>
    </nav>
</div>
<div class="upperbar">
	<input type="text" name="searchbar" class="seachbar" placeholder="Search for any Job">
	<!-- <img src="<?php echo 'companylogos/' . $row['Companylogo'] ?>" class="logoutpic" onerror="this.src='img/add.svg'">
	<img src="img/arrow.svg" class="arrow" onclick="logout()">
	<div class="logoutoptions" id="logout">
		<nav>
			<a href="#" class="acc" onclick="accountsettings()">My Account</a>
			<a href="logoutemployeeseeker.php" class="log">logout</a>
		</nav> -->
	</div>
</div>
<!-- Job seekers admin view -->
<div id="jobseekers">
	<!-- Online users overview -->
  <div id="Overview">	
	<div class="overview">
		<p class="number">20</p>
		<p class="definition">Online users now</p>
		<button class="viewbtn" onclick="displayonlineusers()">View</button>
	</div>
	
	<!-- registered users overview -->
	<div class="overview registered">
		<p class="number">200</p>
		<p class="definition">Registered users</p>
		<button class="viewbtn">View</button>
	</div>
	<!-- Most famous job application -->
	<div class="famousjob">
		<h1>Most job applications</h1>
		<table class="table1">
		  <tr>	
			<th>Company</th>
			<th>Job title</th>
			<th>Job field</th>
			<th>Applicants</th>
		  </tr>
		  <tr>
		  	<td>RDB</td>
		  	<td>Social media manager</td>
		  	<td>Communication</td>
		  	<td>98</td>
		  </tr>	
		</table>
	</div>
   </div>
	<!-- display onlineusers -->
	<div id="onlineusers">
		<h1>Online users now!</h1>
		<div class="profile">
           <img class="userpicture" src="profile.jpg">
           <p class="username">Mugisha Yvan</p>
           <a href="userprofile.php" target="_blank"><button class="viewbtn">Visit</button></a>
		</div>
		<div class="profile">
           <img class="userpicture" src="profile.jpg">
           <p class="username">Mugisha Yvan</p>
           <button class="viewbtn">Visit</button>
		</div>
		<div class="profile">
           <img class="userpicture" src="profile.jpg">
           <p class="username">Mugisha Yvan</p>
           <button class="viewbtn">Visit</button>
		</div>
		<div class="profile">
           <img class="userpicture" src="profile.jpg">
           <p class="username">Mugisha Yvan</p>
           <button class="viewbtn">Visit</button>
		</div>
	</div>
</div>
<!-- ****************************************************************************************** -->
<!-- Company overview -->
<div id="companies">
	<!-- Online company users overview -->
	<div class="overview">
		<p class="number">2</p>
		<p class="definition">Online users now</p>
		<button class="viewbtn">View</button>
	</div>
	<!-- registered company users overview -->
	<div class="overview registered">
		<p class="number">20</p>
		<p class="definition">Registered users</p>
		<button class="viewbtn">View</button>
	</div>
</div>
</body>
</html>j