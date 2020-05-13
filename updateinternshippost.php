<?php
session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: employeeseekerlogin.php");

}
 include('serverlesscompany.php');
$dbconnect=mysqli_connect('localhost', 'HABUWITEKA', '17170', 'talentmatch');
if (isset($_POST['updateinternship'])) {
    #query to lop through
    $idd = mysqli_real_escape_string($dbconnect, $_POST['ID']);
    $title = mysqli_real_escape_string($dbconnect, $_POST['updateinternshiptitle']);
    $location = mysqli_real_escape_string($dbconnect, $_POST['updateinternshiplocation']);
    $deadline = mysqli_real_escape_string($dbconnect, $_POST['updateinternshipdeadline']);
    $industry = mysqli_real_escape_string($dbconnect, $_POST['updateinternshipfield']);
    $description = mysqli_real_escape_string($dbconnect, $_POST['updateinternshipdescription']);
    $result = "UPDATE internshipposting SET Internshiptitle='$title', Deadline='$deadline', location='$location', Internshipindustry='$industry', internshipdescriptionpdf='$description' WHERE ID=$idd";
    mysqli_query($dbconnect, $result);
    header('location:employeeseekerdashboard.php');
    # code...
  //   echo "<tr>";
		// echo "<td>".$mydata['ID']."</td>";
		// echo "<td>".$mydata['Jobtitle']."</td>";
		// echo "<td>".$mydata['jobdescriptionpdf']."</td>";
		// echo "<td>".$mydata['Deadline']."</td>";	
		// echo "<td><a href=\"updatepost.php?ID=$mydata[ID]\">Edit</a></td>";	
}
   ?>
   

<!DOCTYPE html>
<html>
<head>
	<title>Update internship post</title>
	<link rel="icon" type="image/png" href="img/talent.png">
	<link rel="stylesheet" type="text/css" href="Css/dashboardcompany.css">
    <link rel="stylesheet" type="text/css" href="Css/dashboard.css">
	<script type="text/javascript" src="java/java.js"></script>
</head>
<!-- Menu bar -->
<body>
    <!-- division containig search bar with profilepic -->
<div class="upperbaropenpost" >
    <img src="<?php echo 'Profilepictures - Jobseeker/' . $row['profilepicture'] ?>" class="logoutpicopenpost" onerror="this.src='img/add.svg'">
    <img src="img/arrow.svg" class="arrowopenpost" onclick="logout()">
    <div class="logoutoptionsopenpost" id="logout">
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

<?php
//getting id from url
$id = isset($_GET['ID']) ? $_GET['ID'] : '';

//selecting data associated with this particular id
$result = mysqli_query($dbconnect, "SELECT * FROM internshipposting WHERE ID='$id'");

while($res = mysqli_fetch_array($result))
{
	$internshiptitle = $res['Internshiptitle'];
	$internshipdeadline = $res['Deadline'];
	$internshiplocation = $res['location'];
	$internshipindustry = $res['Internshipindustry'];
	$internshipdescription = $res['internshipdescriptionpdf'];
	
}
?>
<div class="updateajob" id="updateajob">
    <h1>Update internship</h1>
    	<form method="POST">
    		<input type="hidden" name="ID" value=<?php echo $id;?>>
    		<label class="label1">Internship title</label><br>
    		<input type="text" name="updateinternshiptitle" class="jobtitle" style="width: 400px;" value="<?php echo $internshiptitle; ?>"><br>
    		<label class="label2">Internship deadline</label><br>
    		<input type="date" name="updateinternshipdeadline" class="other" class="other" value="<?php echo $internshipdeadline; ?>"><br>
    		<label class="label3">Location</label><br>
    		<input type="text" name="updateinternshiplocation" class="other" value="<?php echo $internshiplocation; ?>"><br>
    		<label class="label4">Job Field</label><br>
    		<input type="text" name="updateinternshipfield" class="other" value="<?php echo $internshipindustry; ?>"><br>
    		<label class="label5">Job description(Pdf only)</label><br>
    		<input type="file" name="updateinternshipdescription" accept="Application/pdf" class="other" value="<?php echo $internshipdescription; ?>"><br>
    		<input type="submit" name="updateinternship" value="Update">
    	</form>
    </div>
</html>