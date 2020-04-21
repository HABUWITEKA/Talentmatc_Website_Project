<?php
include('serverlesscompany.php');
$email=$_SESSION['email'];
$dbconnect=mysqli_connect('localhost', 'HABUWITEKA', '17170', 'talentmatch');
$query = mysqli_query($dbconnect, "SELECT * FROM comapnyusers where email='$email'");
$row = mysqli_fetch_assoc($query);
$queryy = mysqli_query($dbconnect, "SELECT * FROM jobsposting where email='$email'");
$roww = mysqli_fetch_assoc($queryy);
   ?>
   

<!DOCTYPE html>
<html>
<head>
	<title>My Dashboard</title>
	<link rel="icon" type="image/png" href="img/talent.png">
	<link rel="stylesheet" type="text/css" href="Css/dashboardcompany.css">
	<script type="text/javascript" src="java/java.js"></script>
</head>
<body>
<!-- Menu bar -->
<div class="menubar">
	<a href="#" onclick="mydashboardcompany(); activatelink1()" style="cursor: progress;"><img src="img/talent.png" class="logo"></a>
	<nav>
	<a href="#" id="link1" class="active" onclick="mydashboardcompany(); activatelink1()">My Dashboard</a>
	<a href="#" id="link2" onclick="jobscompany(); activatelink2()">Jobs</a>
	<a href="#" id="link3" onclick="internshipscompany(); activatelink3()">Internships</a>
	<a href="#" id="link4" onclick="applicantscompany();activatelink4()">Potential Employees</a>
    </nav>
</div>
<!-- division containig search bar with profilepic -->
<div class="upperbar">
	<input type="text" name="searchbar" class="seachbar" placeholder="Search for any Job">
	<img src="<?php echo 'companylogos/' . $row['Companylogo'] ?>" class="logoutpic" onerror="this.src='img/add.svg'">
	<img src="img/arrow.svg" class="arrow" onclick="logout()">
	<div class="logoutoptions" id="logout">
		<nav>
			<a href="#" class="acc" onclick="accountsettings()">My Account</a>
			<a href="logoutemployeeseeker.php" class="log">logout</a>
		</nav>
	</div>
</div>

<!-- This is the account setting that will appear when the companyuser clicks on the My account -->
<div class="editarea accounts" id="accountsettings">
	<img src="img/close.png" class="closeimg close2" onclick="close2()">
	<p>Company Account Settings</p>
<form class="accountsettings interestsedit" method="post">	
	<label class="label1">Company Name</label>
	<input type="text" name="companynameupdate" value="<?php echo $row['companyname'] ?>">
	<label class="label2">Email</label>
	<input type="text" name="emailupdate" value="<?php echo $row['email'] ?>">
	<label class="label3">Change Password</label>
	<input type="password" name="passwordupdate" placeholder="New Password" value="<?php echo $row['password'] ?>">
	<input type="password" name="confirmpasswordupdate" placeholder="Confirm New Password">
	<label class="label4">Telephone</label>
	<input type="tel" name="telephoneupdate" value="<?php echo $row['telephone'] ?>">
	<input type="submit" name="saveaccountsettings" value="Save">
</form>
</div>
<!-- My dashboard section -->
<section class="alldiv" id="Dashboardcompany">
<!-- About me text division Max 100 words -->
<div class="aboutme">
	<h1 class="headings">Who are we?</h1>
	<p class="edit" onclick="aboutmeedit()">edit<span><img class="icon" src="img/edit.svg"></span></p>
	<p class="aboutmetext"><?php echo $row['whoarewe'] ?></p>
	
</div>
<!-- Edit for the above section -->
<div class="editarea" id="aboutmeedit">
	<img src="img/close.png" class="closeimg close2" onclick="close2()">
	<p>Edit your About me (Max. 100 words)</p>
		<form method="post">
			<textarea onchange="maximumwords(this)" name="whoweareupdate">
				<?php echo $row['whoarewe'] ?>
			</textarea>
			<input type="submit" name="Updatewhoweare" value="Edit">
		</form>
	</div>
<!-- Quick facts about  the user -->
<div class="shortbio" >
  <div class="profile">
	<img src="<?php echo 'companylogos/' . $row['Companylogo'] ?>" onerror="this.src='img/add.svg'" class="profilepic">
	<img class="changepp" src="img/edit.svg" onclick="changepicture()">
	<!-- <img src="" class="changepp"> -->
</div>
	<p class="name"><?php echo $row['companyname'] ?></p>
	<p class="title">Industry:<span class="content"> <?php echo $row['Industry'] ?> </span></p>
	<p class="title">Website:<span class="content"> <?php echo $row['Website'] ?> </span></p>
	<p class="title">Location:<span class="content"> <?php echo $row['location'] ?></span></p>
	<p class="edit2" onclick="bioedit()">edit<span><img class="icon2" src="img/edit.svg"></span></p>
</div>
<!-- Edit section of the profle picture only and only -->
<div class="editarea editprofile" id="profileedit">
	<img src="img/close.png" class="closeimg close2" onclick="close2()">
	<p>Upload your company logo</p>
	<form class="profileupdate" method="post" enctype="multipart/form-data">
		<input type="file" name="updatepp" id="updatepp" accept="image/*">
		<input type="submit" name="Updatelogo" value="Upload">
	</form>
</div>
<!-- Edit section for the above section i.e short bio -->
<div class="editarea editareabio" id="bioedit">
	<img src="img/close.png" class="closeimg close2" onclick="close3()">
	<p>Update your biography</p>
		<form class="bioedit" method="post">
			<label>Industry</label>
			<input type="text" name="industryupdate" value="<?php echo $row['Industry'] ?>">
			<label>Website</label>
			<input type="text" name="websiteupdate" value="<?php echo $row['Website'] ?>"><br>
			<label>Location</label>
			<input type="text" name="locationupdate" value="<?php echo $row['location'] ?>"><br>
			<input type="submit" name="Updatecompanybio" value="Update">
		</form>
	</div>

<!-- Three sections on the dashboard -->
<div class="three">
	<h1 class="headings">Our Mission</h1>
	<p class="mission"><?php echo $row['mission']?></p>
	<p class="edit3" onclick="interestedit()">edit<span><img class="icon3" src="img/edit.svg"></span></p>
</div>
<!-- Edit for the above section -->
<div class="editarea" id="interestsedit">
	<img src="img/close.png" class="closeimg close2" onclick="close2()">
	<p>Our Mission</p>
		<form method="post">
			<textarea onchange="maximumwords(this)" name="ourmission">
				
			</textarea>
			<input type="submit" name="Updatemission" value="Edit">
		</form>
	</div>
<div class="three">
	<h1 class="headings">Our Vision</h1>
	<p class="edit3" onclick="skilledit()">edit<span><img class="icon3" src="img/edit.svg"></span></p>
	<p class="vision"><?php echo $row['vision'] ?></p>
</div>
<!-- Edit for the above section -->
<div class="editarea" id="skillsedit">
	<img src="img/close.png" class="closeimg close2" onclick="close2()">
	<p>Our Vision</p>
		<form method="post">
			<textarea onchange="maximumwords(this)" name="ourvision">
				
			</textarea>
			<input type="submit" name="Updatevision" value="Edit">
		</form>
	</div>
<div class="three">
	<h1 class="headings">Documents</h1>
	<ul class="Skills">
		<li>Advanced Certificate</li>
		<li>Market Analysis</li>
		<li>Valentine_resume</li>
	</ul>
	<p class="edit4">Upload<span><img class="icon4" src="img/upload.svg"></span></p>
</div>
</section>	


<!-- jobs section for company -->
 <div id="jobs">
  <div id="alljob">	
 	<!-- Button to add a job on th eplatform -->
 	<div class="addjobdiv" onclick="jobadd()">
 	<img class="addjob" src="img/add.svg">
 	<p class="addjobtitle">Add Job</p>
 </div>
 	<!-- table of actual data and obs -->
 	<table>
        <tr>
            <th>Job id</th>
            <th>Job title</th>
            <th>Candidates</th>
            <th>Deadline</th>
            <th>Action</th>
        </tr>
    <?php 
  
  $result = mysqli_query($dbconnect, "SELECT * FROM jobsposting where Email='$email'");
  
  while ($mydata = mysqli_fetch_assoc($result)) 
  	{ $myid = $mydata['ID'];
  		
 ?>
    <tr>
            <td><?php echo $myid; ?></td>
            <td><?php echo $mydata['Jobtitle']; ?></td>
            <td>Any</td>
            <td><?php echo $mydata['Deadline']; ?></td>
            <td>
           <form method="post">
             <input type="hidden" name="ID" value="<?php echo $mydata['ID']; ?>">
             <input type="submit" name="Deletejob" value="Delete" class="btn">
                </form>
             <a href="updatepost.php?ID=<?php echo $mydata['ID'] ?>" class="btn btn2">Update</a>
            </td>
        </tr>
  <?php 
   
  }?>
  ?>
  
      
    </table>   
</div>
    <div class="postajob" id="postajob">
    	<h1>Post a job</h1>
    	<form method="post">
    		<label class="label1">Job title</label><br>
    		<input type="text" name="jobtitle" class="jobtitle" style="width: 400px;"><br>
    		<label class="label2">Job deadline</label><br>
    		<input type="date" name="jobdeadline" class="other" class="other"><br>
    		<label class="label3">Location</label><br>
    		<input type="text" name="joblocation" class="other" ><br>
    		<label class="label4">Job Field</label><br>
    		<input type="text" name="jobfield" class="other"><br>
    		<label class="label5">Job description(Pdf only)</label><br>
    		<input type="file" name="jobdescription" accept="Application/pdf" class="other"><br>
    		<input type="submit" name="jobsubmit" value="Post">
    	</form>
    </div>
 </div>

 <!-- internships section for company -->
 <div id="internships">
 	<div id="allinternship">	
 	<!-- Button to add a job on th eplatform -->
 	<div class="addjobdiv" onclick="internshipadd()">
 	<img class="addjob" src="img/add.svg">
 	<p class="addjobtitle">Add internship</p>
 </div>
 	<!-- table of actual data and obs -->
 	<table>
        <tr>
            <th>Internship id</th>
            <th>Internship title</th>
            <th>Candidates</th>
            <th>Deadline</th>
            <th>Action</th>
        </tr>
    <?php 
  
  $result = mysqli_query($dbconnect, "SELECT * FROM internshipposting where Email='$email'");
  
  while ($mydata = mysqli_fetch_assoc($result)) 
  	{ $myid = $mydata['ID'];
  		
 ?>
    <tr>
            <td><?php echo $myid; ?></td>
            <td><?php echo $mydata['Internshiptitle']; ?></td>
            <td>Any</td>
            <td><?php echo $mydata['Deadline']; ?></td>
            <td>
           <form method="post">
             <input type="hidden" name="ID" value="<?php echo $mydata['ID']; ?>">
             <input type="submit" name="Deleteinternship" value="Delete" class="btn">
                </form>
             <a href="updateinternshippost.php?ID=<?php echo $mydata['ID'] ?>" class="btn btn2">Update</a>
            </td>
        </tr>
  <?php 
   
  }?>
  ?>
  
      
    </table>   
</div>
    <div class="postajob" id="postinternship">
    	<h1>Post an internship</h1>
    	<form method="post">
    		<label class="label1">Internship title</label><br>
    		<input type="text" name="internshiptitle" class="jobtitle" style="width: 400px;"><br>
    		<label class="label2">Internship deadline</label><br>
    		<input type="date" name="internshipdeadline" class="other" class="other"><br>
    		<label class="label3">Location</label><br>
    		<input type="text" name="internshiplocation" class="other" ><br>
    		<label class="label4">Internship Field</label><br>
    		<input type="text" name="internshipfield" class="other"><br>
    		<label class="label5">Internship description(Pdf only)</label><br>
    		<input type="file" name="internshipdescription" accept="Application/pdf" class="other"><br>
    		<input type="submit" name="internshipsubmit" value="Post">
    	</form>
    </div>
 </div>

 <!-- Applicants section for company -->
 <div id="applicants">
 	<p>Applicants corner</p>
 </div>
</body>
</html>