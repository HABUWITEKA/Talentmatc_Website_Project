<?php
include('serverless.php');
include('serverlesscompany.php');
$dbconnect=mysqli_connect('localhost', 'HABUWITEKA', '17170', 'talentmatch');
$query = mysqli_query($dbconnect, "SELECT * FROM studentusers");
$query2 = mysqli_query($dbconnect, "SELECT * FROM studentprofiles");
$row = mysqli_fetch_assoc($query);

$mysql = "SELECT COUNT(*) FROM studentusers";
$results = mysqli_query($dbconnect, $mysql);
$count = mysqli_fetch_assoc($results)['COUNT(*)'];

$mysql_2 = "SELECT COUNT(*) FROM comapnyusers";
$results_2 = mysqli_query($dbconnect, $mysql_2);
$count_2 = mysqli_fetch_assoc($results_2)['COUNT(*)'];


?>
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
  <a href="#" id="link3" onclick="job();activatelink3()">Jobs</a>
  <a href="#" id="link4" onclick="internship();activatelink4()">Internships</a>
    </nav>
</div>
<div class="upperbar">
	<input type="text" name="searchbar" class="seachbar" placeholder="Search for a user">
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
		<p class="number"><?php echo $count ?></p>
		<p class="definition">Registered users</p>
		<button class="viewbtn" onclick="displayonlineusers()">View</button>
	</div>
	
	<!-- registered users overview -->
	<div class="overview registered">
		<!-- <p class="number">200</p>
		<p class="definition">Registered users</p>
		<button class="viewbtn">View</button> -->
	</div>
	<!-- Most famous job application -->
	<div class="famousjob">
		<div class="titles">
			<h1>Popular Jobs</h1>
		</div>
		<ul>
     <li>
      <img src="profile.jpg" />
      <p>Job 1</p>
    </li>
    <li>
      <img src="profile.jpg" />
      <p>Job 2</p>
    </li>
    <li>
      <img src="profile.jpg" />
      <p>Job 3</p>
    </li>
    <li>
      <img src="profile.jpg" />
      <p>Job 4</p>
    </li>
    <li>
      <img src="profile.jpg" />
      <p>Job 5</p>
    </li>
  </ul>
	</div>
	<!-- Famous intenrshipa -->
	<div class="famousjob">
		<div class="titles">
			<h1>Popular Internships</h1>
		</div>
		<ul>
     <li>
      <img src="profile.jpg" />
      <p>Internship 1</p>
    </li>
    <li>
      <img src="profile.jpg" />
      <p>Internship 2</p>
    </li>
    <li>
      <img src="profile.jpg" />
      <p>Internship 3</p>
    </li>
    <li>
      <img src="profile.jpg" />
      <p>Internship 4</p>
    </li>
    <li>
      <img src="profile.jpg" />
      <p>Internship 5</p>
    </li>
  </ul>
	</div>
	<!-- Popular companies  -->
	<div class="famousjob">
		<div class="titles">
			<h1>Popular companies</h1>
		</div>
	
    <ul>
  
     <li>
      <img src="profile.jpg" />
      <p>Company 1</p>
    </li>
    <li>
      <img src="profile.jpg" />
      <p>Company 2</p>
    </li>
    <li>
      <img src="profile.jpg" />
      <p>Company 2</p>
    </li>
    <li>
      <img src="profile.jpg" />
      <p>Company 2</p>
    </li>
    <li>
      <img src="profile.jpg" />
      <p>Company 2</p>
    </li>
  </ul>
</div>
<div class="famousjob">
		<div class="titles">
			<h1>Popular Courses</h1>
		</div>
		<ul>
     <li>
      <img src="profile.jpg" />
      <p>Course 1</p>
    </li>
    <li>
      <img src="profile.jpg" />
      <p>Course 2</p>
    </li>
    <li>
      <img src="profile.jpg" />
      <p>Course 3</p>
    </li>
    <li>
      <img src="profile.jpg" />
      <p>Course 4</p>
    </li>
    <li>
      <img src="profile.jpg" />
      <p>Course 5</p>
    </li>
  </ul>
	</div>
  </div>	

	<!-- display onlineusers -->
	<div id="onlineusers">
		<h1>Registered users</h1>
		
      <?php 
  
  $result = mysqli_query($dbconnect, "SELECT * FROM studentusers");
  
  while ($mydata = mysqli_fetch_assoc($result)) 
    { 
      
 ?><div class="profile">
      <img class="userpicture" src="<?php echo 'Profilepictures - Jobseeker/' . $mydata['profilepicture'] ?>" onerror="this.src='close.png'">
           <p class="username"><?php echo $mydata['Fullname'] ?></p>
           <a href="userprofile.php?Fullname=<?php echo $mydata['Fullname'] ?>" target="_blank"><button class="viewbtn">Visit</button></a>
           </div>
  <?php 
   
  }?>
  ?>
           
	
		
	</div>
</div>
<!-- ****************************************************************************************** -->
<!-- Company overview -->
<div id="companies">
	<!-- Online company users overview -->
 <div id="companyoverview">
	<div class="overview">
		<p class="number"><?php echo $count_2;  ?></p>
		<p class="definition">Registered companies</p>
		<button class="viewbtn" onclick="displaycompanyonlineusers()">View</button>
	</div>
	<!-- registered company users overview -->
	<div class="overview registered">
		<!-- <p class="number">20</p>
		<p class="definition">Registered users</p>
		<button class="viewbtn">View</button> -->
	</div>
</div> 
  <div id="onlinecompanyusers">
    <h1>Registered companies</h1>
    
      <?php 
  
  $result = mysqli_query($dbconnect, "SELECT * FROM comapnyusers");
  
  while ($mydata = mysqli_fetch_assoc($result)) 
    { 
      
 ?><div class="profile">
      <img class="userpicture" src="<?php echo 'companylogos/' . $mydata['Companylogo'] ?>" onerror="this.src='close.png'">
           <p class="username"><?php echo $mydata['companyname'] ?></p>
           <a href="userprofile.php?companyname=<?php echo $mydata['companyname'] ?>" target="_blank"><button class="viewbtn">Visit</button></a>
           </div>
  <?php 
   
  }?> 
  </div>

</div>



<!-- Jobs-->
<div id="jobs">
  <section id="jobsection">
    <table id="tablejobs">
      <tr>
         <th>Job Id</th>
         <th>Job Title</th>
         <th>Action</th>
      </tr>
      <?php 
  
  $result = mysqli_query($dbconnect, "SELECT * FROM jobsposting");
  
  while ($all = mysqli_fetch_assoc($result)) 
    { 
      
 ?>
      <tr>
      <td><?php echo $all['ID'] ?></td>
      <td><?php echo $all['Jobtitle'] ?></td>
      <td>
       <a href="applicants.php?Jobname=<?php echo $all['Jobtitle'] ?>"><button>View Applicants</button></a>
        <button>Delete Job</button>
      </td>
    </tr>
  <?php 
   
  }?>
    </table>
</section>
</div>


<!-- Jinternships-->
<div id="internship">
  <section id="internshipsection">
    <table id="tablejobs">
      <tr>
         <th>Internship Id</th>
         <th>Internship Title</th>
         <th>Action</th>
      </tr>
      <?php 
  
  $result = mysqli_query($dbconnect, "SELECT * FROM internshipposting");
  
  while ($all = mysqli_fetch_assoc($result)) 
    { 
      
 ?>
      <tr>
      <td><?php echo $all['ID'] ?></td>
      <td><?php echo $all['Internshiptitle'] ?></td>
      <td>
       <a href="applicantsinternship.php?Internshipname=<?php echo $all['Internshiptitle'] ?>"><button>View Applicants</button></a>
        <button>Delete Internship</button>
      </td>
    </tr>
  <?php 
   
  }?>
    </table>
</section>
</div>
</body>
</html>js