<?php
include('serverless.php');
$dbconnect=mysqli_connect('localhost', 'HABUWITEKA', '17170', 'talentmatch');
$fullname = isset($_GET['Fullname']) ? $_GET['Fullname'] : '';

//selecting data associated with this particular id
$result = mysqli_query($dbconnect, "SELECT * FROM studentusers WHERE Fullname='$fullname'");
$mydata = mysqli_fetch_assoc($result);
$email = $mydata['email'];
//deleting
if (isset($_POST['Deleteuser'])) {
    $fullname = mysqli_real_escape_string($connection, $_POST['Fullname']);
    $update1= "DELETE from studentusers WHERE Fullname='$fullname'";
    mysqli_query($dbconnect, $update1);
    header('location:index.php');
    # code...
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $mydata['Fullname'] ?> - Profile</title>
	<link rel="icon" type="image/png" href="img/talent.png">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<script type="text/javascript" src="admin.js"></script>
	<script type="text/javascript" src="java.js"></script>
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
		<button class="btn" onclick="section1display()">User Biography</button>
		<button class="btn" onclick="section2display()">Applications history</button>
		<button class="btn" onclick="section3display()">Session details</button>
        <button class="btn" style="background: red;" onclick="section4display()">Remove</button>
	<img src="<?php echo 'Profilepictures - Jobseeker/'. $mydata['profilepicture'] ?>" class="userpicture">
	<p class="username"><?php echo $mydata['Fullname'] ?></p>
	<p class="joininginfo">Joined May 2019</p>
	<!-- Contact buttons to call or directly email the user -->
	<div class="contacticon" onclick="call()">
		<img class="icon" src="phone.png">
		<p>Call</p>
	</div>
	<div class="contacticon" onclick="email()">
	    <img class="icon" src="email.png">
	    <p>Email</p>
    </div>
    <!-- Pop ups when wanting to call or email -->
    <div id="call">
    	<img src="close.png" class="closeimg close1" onclick="closecall()">
    	<p class="number2">+250<?php echo $mydata['telephone'] ?></p>
    </div>
     <div id="email">
    	<img src="close.png" class="closeimg close1" onclick="closeemail()">
    	<a href="mailto:<?php echo $mydata['email'] ?>" class="number2">Email me now!</a>
    </div>

    <!-- Section -->
    <section class="section1" id="section1">
    	<div class="aboutme">
	      <h1 class="headings">About me</h1>
	      <p class="aboutmetext"><?php echo $mydata['Aboutme'] ?></p>
        </div>
        
        <div class="three" >
	<p class="title">University:<br><span class="content"><?php echo $mydata['Currentuniv'] ?></span></p>
	<p class="title">Degree:<br><span class="content"><?php echo $mydata['Degree'] ?></span></p>
	<p class="title">Graduation:<br><span class="content"><?php echo $mydata['Graduation'] ?></span></p>
	<p class="title">Current status:<br><span class="content"><?php echo $mydata['status'] ?></span></p>
	   </div>

	   <div class="three">
	<h1 class="headings">Interests</h1>
	<ol class="Interests">
		<li><?php echo $mydata['Interest1'] ?></li>
		<li><?php echo $mydata['Interest2'] ?></li>
		<li><?php echo $mydata['Interest3'] ?></li>
	</ol>
       </div>
       <div class="three">
	<h1 class="headings">Skills</h1>
	<ol class="Interests">
		<li><?php echo $mydata['Skill1'] ?></li>
		<li><?php echo $mydata['Skill2'] ?></li>
		<li><?php echo $mydata['Skill3'] ?></li>
	</ol>
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
		<?php 
  
  $result = mysqli_query($dbconnect, "SELECT * FROM applications where Email='$email'");
  
  while ($myrow = mysqli_fetch_assoc($result)) 
  	{ 
  		
 ?>
    	<tr>
			<td><?php echo $myrow['Jobname'] ?></td>
			<td><?php echo $myrow['Company'] ?></td>
			<td><?php echo $myrow['Jobdeadline'] ?></td>
			<td><?php echo $myrow['Jobfield'] ?></td>
			<td>Pending</td>
		</tr>
  <?php 
   
  }?>
  

	</table>

	<table id="interntable" class="table">
		<tr>
			<th>Title</th>
			<th>Company</th>
			<th>Deadline</th>
			<th>Field</th>
			<th>Status</th>
		</tr>
		<?php 
  
  $result = mysqli_query($dbconnect, "SELECT * FROM internshipapplication where Email='$email'");
  
  while ($myrows = mysqli_fetch_assoc($result)) 
  	{ 
  		
 ?>
    	<tr>
			<td><?php echo $myrows['Internshipname'] ?></td>
			<td><?php echo $myrows['Company'] ?></td>
			<td><?php echo $myrows['Internshipdeadline'] ?></td>
			<td><?php echo $myrows['Internshipfield'] ?></td>
			<td>Pending</td>
		</tr>
  <?php 
   
  }?>

	</table>

	
    </section>

    <!-- Another section -->
    <section id="section3">
       <p class="lastlogin">Last login: 19:45 , December 23 2019</p>
    </section>
    <!-- Another section -->
    <section id="section4">
    	<p class="decision">Are you sure you want to remove <?php echo $mydata['Fullname']; ?></p>
    	<form method="post">
             <input type="hidden" name="Fullname" value="<?php echo $mydata['Fullname']; ?>">
             <input type="submit" name="Deleteuser" value="Delete" class="decisionbtn proceed">
                </form>
    	<button class="decisionbtn cancel" onclick="section1display()">Cancel</button>
    </section>
    
</div>
</body>
</html>