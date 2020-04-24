<!DOCTYPE html>
<html>
<head>
	<title>Mugisha Yvan - Profile</title>
	<link rel="icon" type="image/png" href="img/talent.png">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<script type="text/javascript" src="admin.js"></script>
</head>
<body>
  <div class="upperbarviewuser" >
    <!-- <img src="<?php echo 'Profilepictures - Jobseeker/' . $row['profilepicture'] ?>" class="logoutpicopenpost" onerror="this.src='img/add.svg'">
    <img src="img/arrow.svg" class="arrowopenpost" onclick="logout()"> -->
    <!-- <div class="logoutoptionsopenpost" id="logout">
        <nav>
            <a href="#" class="acc" onclick="accountsettings()">My Account</a>
            <a href="logoutjobseeker.php" class="log">logout</a>
        </nav>
    </div> -->
</div>
<!-- box containig all user info s -->
<div class="userbox">
	<!-- Buttons to print/download the document -->
	<button>Print</button>
	<button>Download</button>
	<!-- Image, name and joinining  of the user -->
		<button class="btn" onclick="display()">User Biography</button>
		<button class="btn">Applications history</button>
		<button class="btn">Session details</button>
        <button class="btn" style="background: red;">Remove</button>
	<img src="profile.jpg" class="userpicture">
	<p class="username">Mugisha Yvan</p>
	<p class="joininginfo">Joined May 2019</p>
	<!-- Contact buttons to call or directly email the user -->
	<div class="contacticon">
		<img class="icon" src="phone.png">
		<p>Call</p>
	</div>
	<div class="contacticon">
	    <img class="icon" src="email.png">
	    <p>Email</p>
    </div>
    <!-- Section -->
    <section class="section1" id="section1">
    	
    	<div class="aboutme">
	      <h1 class="headings">About me</h1>
	      <p class="aboutmetext"><?php echo $row['Aboutme'] ?></p>
        </div>
        
        <div class="three" >
	<p class="title">University:<br><span class="content">KIM</span></p>
	<p class="title">Degree:<br><span class="content">ECONOMICS</span></p>
	<p class="title">Graduation:<br><span class="content">MAY 2021</span></p>
	<p class="title">Current status:<br><span class="content">Unemployed</span></p>
	   </div>

	   <div class="three">
	<h1 class="headings">Interests</h1>
       </div>
       <div class="three">
	<h1 class="headings">Skills</h1>
       </div>
    </section>
    <!-- Another section -->
    <section class="section2" id="section2">
    	<p class="titles">Applications History</p>
    	<button class="switch" id="jobbutton" onclick="jobswitch()">Job Applications</button>
	<button class="switch" id="internbutton" onclick="internswitch()">Internship Applications</button>

	<table id="jobtable" class="table">
		<tr>
			<th>Title</th>
			<th>Company</th>
			<th>Deadline</th>
			<th>Field</th>
			<th>Status</th>
		</tr>
	</table>

	<table id="interntable" class="table">
		<tr>
			<th>Title</th>
			<th>Company</th>
			<th>Deadline</th>
			<th>Field</th>
			<th>Status</th>
		</tr>
		<tr>
			<td>Title</td>
			<td>Title</td>
			<td>Title</td>
			<td>Title</td>
			<td>Title</td>
		</tr>
	</table>

	
    </section>

    <!-- Another section -->
    <section id="section3">
       <p class="lastlogin">Last login: 19:45 , December 23 2019</p>
    </section>
    <!-- Another section -->
    <section id="section4">
    	<p class="decision">Are you sure you want to remove Mugisha Yvan?</p>
    	<button class="decisionbtn proceed">Proceed</button>
    	<button class="decisionbtn cancel">Cancel</button>
    </section>
    
</div>
</body>
</html>