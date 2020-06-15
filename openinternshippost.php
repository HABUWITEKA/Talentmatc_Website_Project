<?php


 include('serverlesscompany.php');
 $email=$_SESSION['email'];
$dbconnect=mysqli_connect('localhost', 'HABUWITEKA', '17170', 'talentmatch');
?>
   <?php
//getting id from url
$id = isset($_GET['ID']) ? $_GET['ID'] : '';

//selecting data associated with this particular id
$result = mysqli_query($dbconnect, "SELECT * FROM internshipposting WHERE ID='$id'");
$queryy = mysqli_query($dbconnect, "SELECT * FROM studentusers WHERE email = '$email'");
$row = mysqli_fetch_assoc($queryy);
while($res = mysqli_fetch_array($result))
{
    $internshiptitle = $res['Internshiptitle'];
    $internshipdeadline = $res['Deadline'];
    $internshiplocation = $res['location'];
    $internshipindustry = $res['Internshipindustry'];
    $internshipdescription = $res['internshipdescriptionpdf'];
    $emaill = $res['Email'];
}
// Retrieving the company logo from the database
$anotherresult = mysqli_query($dbconnect, "SELECT * FROM comapnyusers WHERE email = '$emaill'");
while ($anotheres=mysqli_fetch_array($anotherresult)) {
    $companyimage = $anotheres['Companylogo'];
    $companyname = $anotheres['companyname'];
}
?>
<!-- Php side of keeping track of who applied -->
<?php
if (isset($_POST['applyinternship'])) {
   
    $save = "INSERT INTO internshipapplication(Email, Company, Internshipname, Internshipdeadline, Internshipfield) VALUES ('$email','$companyname', '$internshiptitle', '$internshipdeadline', '$internshipindustry')";
    mysqli_query($dbconnect, $save);
}

 ?>
   
<!-- The html part of our code for a good look -->
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $internshiptitle ?></title>
	<link rel="icon" type="image/png" href="img/talent.png">
	<link rel="stylesheet" type="text/css" href="Css/dashboard.css">
	<script type="text/javascript" src="java/java.js"></script>
</head>
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
    <input type="tel" name="telephoneupdate" value="<?php echo $row['telephone'] ?>">
    <input type="submit" name="saveaccountsettings" value="Save">
</form>
</div>
    <!-- The ui part the user will see. -->
    <div class="jobposter" id="jobposter">
        <button onclick="window.close()">Not interested</button>
        <div class="design">
            <img src="<?php echo 'companylogos/' . $companyimage ?>">
            <p class="jobtitlee"><?php echo $internshiptitle; ?></p>
            <p class="desc">Job field:<?php echo $internshipindustry; ?></p>
            <p class="desc">Location:<?php echo $internshiplocation; ?></p>
            <p class="desc">Deadline: <?php echo $internshipdeadline; ?></p>
        </div>
        <h1>Job Description</h1>
        <iframe src="internshipdescriptions/<?php echo $internshipdescription; ?>"></iframe>
        <!-- Submit documents needed for the -->
        <h1 class="doc">Submit documents</h1>
        <form method="post">
            <label class="label">Upload your Resume/CV(Only Pdf)</label>
            <label class="label">Upload your Cover letter(Only Pdf)</label>
            <input type="file" name="cvforjob" accept="Application/pdf">
            <input type="file" name="letterforjob" accept="Application/pdf">
            <input type="submit" name="applyinternship" value="Submit">
        </form>
    </div>
</body>

</html>