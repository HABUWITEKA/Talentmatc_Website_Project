<?php
//session_start();
include('serverless.php');
$email=$_SESSION['email'];
$dbconnect=mysqli_connect('localhost', 'HABUWITEKA', '17170', 'talentmatch');
$query = mysqli_query($dbconnect, "SELECT * FROM studentusers where email='$email'");
$query2 = mysqli_query($dbconnect, "SELECT * FROM studentprofile where email='$email'");
$row = mysqli_fetch_assoc($query);

//updatingbio


?>

<!DOCTYPE html>
<html>
<head>
	<title>My Dashboard</title>
	<link rel="icon" type="image/png" href="img/talent.png">
	<link rel="stylesheet" type="text/css" href="Css/dashboard.css">
	<script type="text/javascript" src="java/java.js"></script>
</head>
<body>
<!-- Menu bar -->
<div class="menubar">
	<a href="#" onclick="Mydashboard(); activatelink1()" style="cursor: progress;"><img src="img/talent.png" class="logo"></a>
	<nav>
	<a href="#" id="link1" class="active" onclick="Mydashboard(); activatelink1()">My Dashboard</a>
	<a href="#" id="link2" onclick="MyApplications(); activatelink2()">My Applications</a>
	<a href="#" id="link3" onclick="Jobopportunities(); activatelink3()">Job Opportunities</a>
	<a href="#" id="link4" onclick="Internshipopportunities(); activatelink4()">Internship Opportunites</a>
	<a href="#" id="link5" onclick="Careerresources(); activatelink5()">Career Guidance</a>
	<a href="#">Events</a>s
    </nav>
</div>
<!-- division containig search bar with profilepic -->
<div class="upperbar">
	<input type="text" name="searchbar" class="seachbar" placeholder="Search for any Job">
	<img src="<?php echo 'Profilepictures - Jobseeker/' . $row['profilepicture'] ?>" class="logoutpic" onerror="this.src='img/default.png'">
	<img src="img/arrow.svg" class="arrow" onclick="logout()">
	<div class="logoutoptions" id="logout">
		<nav>
			<a href="#" class="acc" onclick="accountsettings()">My Account</a>
			<a href="logoutjobseeker.php" class="log">logout</a>
		</nav>
	</div>
</div>
<!-- This is the account setting that will appear when the user clicks on the My account -->
<div class="editarea" id="accountsettings">
	<p>My Account Settings</p>
<form class="accountsettings interestsedit" method="post">	
	<img src="img/close.png" class="closeimg close1" onclick="close1()">
	<label class="label1">Full Name</label>
	<input type="text" name="fullnameupdate" value="<?php echo $row['Fullname'] ?>">
	<label class="label2">Email</label>
	<input type="text" name="emailupdate" value="<?php echo $row['email'] ?>">
	<label class="label3">Change Password</label>
	<input type="password" name="passwordupdate" placeholder="New Password" value="<?php echo $row['Password'] ?>">
	<input type="password" name="confirmpasswordupdate" placeholder="Confirm New Password">
	<label class="label4">Telephone</label>
	<input type="tel" name="telephoneupdate" value="0787282620">
	<input type="submit" name="saveaccountsettings" value="Save">
</form>
</div>
<!-- My dashboard section -->
<section class="alldiv" id="Mydashboard">
<!-- About me text division Max 100 words -->
<div class="aboutme">
	<h1 class="headings">About me</h1>
	<p class="edit" onclick="aboutmeedit()">edit<span><img class="icon" src="img/edit.svg"></span></p>
	<p class="aboutmetext"><?php echo $row['Aboutme'] ?></p>
	
</div>
<!-- Edit for the above section -->
<div class="editarea" id="aboutmeedit">
	<img src="img/close.png" class="closeimg close2" onclick="close2()">
	<p>Edit your About me (Max. 100 words)</p>
		<form method="post">
			<textarea onchange="maximumwords(this)" name="aboutmeupdate">
				<?php echo $row['Aboutme'] ?>
			</textarea>
			<input type="submit" name="Updateaboutme" value="Edit">
		</form>
	</div>
<!-- Quick facts about  the user -->
<div class="shortbio" >
  <div class="profile">
	<img src="<?php echo 'Profilepictures - Jobseeker/' . $row['profilepicture'] ?>" onerror="this.src='img/default.png'" class="profilepic">
	<img class="changepp" src="img/edit.svg" onclick="changepicture()">
	<!-- <img src="" class="changepp"> -->
</div>
	<p class="name"> <?php echo $row['Fullname'] ?></p>
	<p class="title">University:<span class="content"> <?php echo $row['Currentuniv'] ?></span></p>
	<p class="title">Degree:<span class="content"> <?php echo $row['Degree'] ?></span></p>
	<p class="title">Graduation:<span class="content"> <?php echo $row['Graduation'] ?></span></p>
	<p class="title">Current status:<span class="content"><?php echo $row['status'] ?></span></p>
	<p class="edit2" onclick="bioedit()">edit<span><img class="icon2" src="img/edit.svg"></span></p>
</div>
<!-- Edit section of the profle picture only and only -->
<div class="editarea editprofile" id="profileedit">
	<img src="img/close.png" class="closeimg close2" onclick="close2()">
	<p>Change your profile picture</p>
	<form class="profileupdate" method="post" enctype="multipart/form-data">
		<input type="file" name="updatepp" id="updatepp" accept="image/*">
		<input type="submit" name="Updatepicture" value="Upload">
	</form>
</div>
<!-- Edit section for the above section i.e short bio -->
<div class="editarea editareabio" id="bioedit">
	<img src="img/close.png" class="closeimg close3" onclick="close3()">
	<p>Update your biography</p>
		<form class="bioedit" method="post">
			<label>University</label>
			<input type="text" name="universityupdate" value="<?php echo $row['Currentuniv'] ?>">
			<label>Degree</label>
			<input type="text" name="degreeupdate" value="<?php echo $row['Degree'] ?>"><br>
			<label>Graduation Date</label>
			<input type="text" name="graduationupdate" value="<?php echo $row['Graduation'] ?>"><br>
			<label>Employment Status</label>
			<select name="status" value="<?php echo $row['status'] ?>">
				<option>Status</option>
				<option>Employed</option>
				<option>Interning</option>
				<option>Unemployed</option>
			</select>
			<input type="submit" name="Updatebio" value="Update">
		</form>
	</div>
<!-- Three sections on the dashboard -->
<div class="three">

	<h1 class="headings">Interests</h1>
	<ul class="Interests">
		<li><?php echo $row['Interest1'] ?></li>
		<li><?php echo $row['Interest2'] ?></li>
		<li><?php echo $row['Interest3'] ?></li>
	</ul>
	<p class="edit3" onclick="interestedit()">Add<span><img class="icon3" src="img/add.svg"></span></p>
</div>
<!-- Edit for the above section -->
<div class="editarea" id="interestsedit">
	<img src="img/close.png" class="closeimg close2" onclick="close2()">
	<p>Add(Edit) up to  3 interests</p>
		<form class="interestsedit" method="post">
			<input type="text" name="interest1" placeholder="Interest 1" value="<?php echo $row['Interest1'] ?>">
			<input type="text" name="interest2" placeholder="Interest 2" value="<?php echo $row['Interest2'] ?>">
			<input type="text" name="interest3" placeholder="Interest 3" value="<?php echo $row['Interest3'] ?>">
			<!-- <input type="text" name="interest1" placeholder="Interest 4"> -->
			<input type="submit" name="Updateinterests" value="Add/Update">
		</form>
	</div>
<div class="three">
	<h1 class="headings">Skills</h1>
	<ul class="Skills">
		<li><?php echo $row['Skill1'] ?></li>
		<li><?php echo $row['Skill2'] ?></li>
		<li><?php echo $row['Skill3'] ?></li>
	</ul>
	<p class="edit3" onclick="skilledit()">Add<span><img class="icon3" src="img/add.svg"></span></p>
</div>
<!-- Edit for the above section -->
<div class="editarea" id="skillsedit">
	<img src="img/close.png" class="closeimg close2" onclick="close2()">
	<p>Add(Edit) up to  4 Skills</p>
		<form class="interestsedit" method="post">
			<input type="text" name="skill1" placeholder="Skill 1" value="<?php echo $row['Skill1'] ?>">
			<input type="text" name="skill2" placeholder="Skill 2" value="<?php echo $row['Skill2'] ?>">
			<input type="text" name="skill3" placeholder="Skill 3" value="<?php echo $row['Skill3'] ?>">
			<!-- <input type="text" name="skill1" placeholder="skill 4"> -->
			<input type="submit" name="Updateskills" value="Add/Update">
		</form>
	</div>
<div class="three">
	<h1 class="headings">Documents</h1>
	<p class="edit4">Upload<span><img class="icon4" src="img/upload.svg"></span></p>
	<ul class="Skills">
		<li><?php echo $row['Resume'] ?></li>
	</ul>
	
</div>
</section>
<!-- My applications section -->
<div id="MyApplications">
	
	<!-- Switching mode -->
	<button class="switch" id="jobbutton" onclick="jobswitch()">Job Applications</button>
	<button class="switch" id="internbutton" onclick="internswitch()">Internship Applications</button>
	<!-- Table dashboard to display where the user has applied to, the status -->
	<table id="jobtable">
		<tr>
			<th>Job Name</th>
			<th>Company</th>
			<th>Job Deadline</th>
			<th>Job field</th>
			<th>Status</th>
		</tr>
		<?php 
  
  $result = mysqli_query($dbconnect, "SELECT * FROM applications where Email='$email'");
  
  while ($mydata = mysqli_fetch_assoc($result)) 
  	{ 
  		
 ?>
    	<tr>
			<td><?php echo $mydata['Jobname'] ?></td>
			<td><?php echo $mydata['Company'] ?></td>
			<td><?php echo $mydata['Jobdeadline'] ?></td>
			<td><?php echo $mydata['Jobfield'] ?></td>
			<td>Pending</td>
		</tr>
  <?php 
   
  }?>
  ?>
  
		
	</table>
	<table id="interntable">
		<tr>
			<th>Internship Name</th>
			<th>Company</th>
			<th>Internship Deadline</th>
			<th>Internship field</th>
			<th>Status</th>
		</tr>
		<?php 
  
  $result = mysqli_query($dbconnect, "SELECT * FROM internshipapplication where Email='$email'");
  
  while ($mydata = mysqli_fetch_assoc($result)) 
  	{ 
  		
 ?>
    	<tr>
			<td><?php echo $mydata['Internshipname'] ?></td>
			<td><?php echo $mydata['Company'] ?></td>
			<td><?php echo $mydata['Internshipdeadline'] ?></td>
			<td><?php echo $mydata['Internshipfield'] ?></td>
			<td>Pending</td>
		</tr>
  <?php 
   
  }?>
  ?>
  
		
	</table>
</div>
<!-- Job opportunities section -->
<div id="Jobopportunities">
	<?php
	
  $result = mysqli_query($dbconnect, "SELECT * FROM jobsposting");
  while ($mydata = mysqli_fetch_assoc($result)) 
  	{ 
  		$emaill = $mydata['Email'];
  		$anotherresult = mysqli_query($dbconnect, "SELECT * FROM comapnyusers WHERE email = '$emaill'");
        while ($anotheres=mysqli_fetch_array($anotherresult)) 
        {
        $companyimage = $anotheres['Companylogo'];
        }
    ?>

  	<a href="openpost.php?ID=<?php echo $mydata['ID'] ?>" target="_blank">
    <div class="jobposting job" id="jobposting" onclick="jobposterdisplay()">
		<img src="<?php echo 'companylogos/' . $companyimage ?>" class="jobimg">
		<p class="jobtitle"><?php echo $mydata['Jobtitle'] ?></p>
		<p class="jobdeadline"><?php echo $mydata['Deadline'] ?></p>
		<p class="joblocation"><?php echo $mydata['location'] ?></p>
		<img class="next" src="img/next.png">
		<p class="apply" onclick="jobposterdisplay()">Apply</p> 
	</div></a>

  <?php 
} 
  ?>
  
  ?>
	

</div>


<!-- Internship positions section -->
<div id="Internshipopportunities">
	<?php
	
  $result = mysqli_query($dbconnect, "SELECT * FROM internshipposting");
  while ($mydata = mysqli_fetch_assoc($result)) 
  	{ 
  		$emaill = $mydata['Email'];
  		$anotherresult = mysqli_query($dbconnect, "SELECT * FROM comapnyusers WHERE email = '$emaill'");
        while ($anotheres=mysqli_fetch_array($anotherresult)) 
        {
        $companyimage = $anotheres['Companylogo'];
        }
    ?>

  	<a href="openinternshippost.php?ID=<?php echo $mydata['ID'] ?>" target="_blank">
  		<div class="internshipposting internship" id="internshipposting" onclick="internshipposterdisplay()">
		<img src="<?php echo 'companylogos/' . $companyimage ?>" class="jobimg">
		<p class="internshiptitle"><?php echo $mydata['Internshiptitle'] ?></p>
		<p class="internshipdeadline"><?php echo $mydata['Deadline'] ?></p>
		<p class="internshiplocation"><?php echo $mydata['location'] ?></p>
		<img class="internshipnext" src="img/next.png">
		<p class="internshipapply">Apply</p>
	</div>
    

  <?php 
} 
  ?>
  
  
	
</div>


<!-- Career Guidance section -->
<div id="Careerresources">
	<div class="resource career">
	<div class="alll">	
		<img src="img/skol.jpg" class="resourceimg">
		<p class="resourcetitle">Resume Writing</p>
		<p class="resourcedesc">Learn the best and catching way to write professional resumes that will make you stand out from others.</p>
		<p class="resourcedetail">3Articles</p>
	</div>
		<button class="btn">Enroll</button>
	</div>
	<div class="resource career">
		<div class="alll">	
		<img src="img/profile.jpg" class="resourceimg">
		<p class="resourcetitle">Cover Letter Writing</p>
		<p class="resourcedesc">Learn the best and catching way to write professional resumes that will make you stand out from others.</p>
		<p class="resourcedetail">2Articles</p>
	</div>
	<button class="btn">Enroll</button>
	</div>
	<div class="resource career">
		<div class="alll">	
		<img src="img/airtel.png" class="resourceimg">
		<p class="resourcetitle">Interview Tips</p>
		<p class="resourcedesc">Learn the best and catching way to write professional resumes that will make you stand out from others.</p>
		<p class="resourcedetail">2Articles + 2Videos</p>
	</div>
        <button class="btn">Enroll</button>
	</div>
	<div class="resource career">
		<div class="alll">	
		<img src="img/airtel.png" class="resourceimg">
		<p class="resourcetitle">Interview Tips</p>
		<p class="resourcedesc">Learn the best and catching way to write professional resumes that will make you stand out from others.</p>
		<p class="resourcedetail">2Articles + 2Videos</p>
	</div>
        <button class="btn">Enroll</button>
	</div>
</div>
</body>
</html>