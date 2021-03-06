<?php
// session_start();
// if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

// header ("Location: jobseekerlogin.php");

// }
 include('serverlesscompany.php');
 $email=$_SESSION['email'];
 // include('serverless.php');
$dbconnect=mysqli_connect('localhost', 'HABUWITEKA', '17170', 'talentmatch');
?>
 <?php
//getting id from url
$id = isset($_GET['ID']) ? $_GET['ID'] : '';

//selecting data associated with this particular id
$result = mysqli_query($dbconnect, "SELECT * FROM jobsposting WHERE ID='$id'");
$querry = mysqli_query($dbconnect, "SELECT * FROM studentusers WHERE email='$email'");
$row = mysqli_fetch_assoc($querry);
while($res = mysqli_fetch_array($result))
{
    $jobtitle = $res['Jobtitle'];
    $jobdeadline = $res['Deadline'];
    $joblocation = $res['location'];
    
    $jobdescription = $res['jobdescriptionpdf'];
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
if (isset($_POST['applyjob'])) {
    $save = "INSERT INTO applications(Email, Company, Jobname, Jobdeadline) VALUES ('$email','$companyname', '$jobtitle', '$jobdeadline')";
    mysqli_query($dbconnect, $save) or die(mysqli_error($dbconnect));
}
if (isset($_POST['applyjob'])) {
    // for the database
    $profileImageName = time() . '-' . $_FILES["jobresume"]["name"];
    // For image upload
    $target_dir = "Admin/Jobresumes/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // Upload image only if no errors

      if(move_uploaded_file($_FILES["jobresume"]["tmp_name"], $target_file)) {
        $sql = "UPDATE applications SET Resume='$profileImageName' WHERE email='$email' AND Jobname='$jobtitle' ";
        mysqli_query($dbconnect, $sql);     
      } 
  }
  if (isset($_POST['applyjob'])) {
    // for the database
    $profileImageName = time() . '-' . $_FILES["jobcoverletter"]["name"];
    // For image upload
    $target_dir = "Admin/Jobcoverletters/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // Upload image only if no errors

      if(move_uploaded_file($_FILES["jobcoverletter"]["tmp_name"], $target_file)) {
        $sql = "UPDATE applications SET Coverletter='$profileImageName' WHERE email='$email' AND Jobname='$jobtitle' ";
        mysqli_query($dbconnect, $sql);     
      } 
  }

 ?>
<!-- The html part of our code for a good look -->
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $jobtitle ?></title>
	<link rel="icon" type="image/png" href="img/talent.png">
	<link rel="stylesheet" type="text/css" href="Css/dashboard.css">
	<script type="text/javascript" src="java/java.js"></script>
    <style type="text/css">

    </style>
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
    <input type="tel" name="telephoneupdate" value="0787282620">
    <input type="submit" name="saveaccountsettings" value="Save">
</form>
</div>
   

    <!-- The ui part the user will see. -->
    <div class="jobposter" id="jobposter">
        <button onclick="window.close()">Not interested</button>
        <div class="design">
            <img src="<?php echo 'companylogos/' . $companyimage ?>">
            <p class="jobtitlee"><?php echo $jobtitle; ?></p>
            <p class="desc">Job field:<?php echo $jobindustry; ?></p>
            <p class="desc">Location:<?php echo $joblocation; ?></p>
            <p class="desc">Deadline: <?php echo $jobdeadline; ?></p>
        </div>
        <h1>Job Description</h1>
        <iframe src="Jobdescriptions/<?php echo $jobdescription; ?>"></iframe>
        <!-- Submit documents needed for the -->
        <h1 class="doc">Submit documents</h1>
        <form method="post" enctype="multipart/form-data">
            <label class="label">Upload your Resume/CV(Only Pdf)</label>
            <label class="label">Upload your Cover letter(Only Pdf)</label>
            <input type="file" name="jobresume" accept="Application/pdf">
            <input type="file" name="jobcoverletter" accept="Application/pdf">
            <input type="submit" name="applyjob" value="Submit">
        </form>
    </div>
</body>

</html>