<?php 

session_start();
// connect to the database
$connection = mysqli_connect('localhost', 'HABUWITEKA', '17170', 'talentmatch');

//let's start by registering a JOBSEEKER and keep the human in our db

if (isset($_POST['submitjobseeker'])) {
	//Grabbing all that the user entere

	$Fullname = mysqli_real_escape_string($connection,$_POST['Fullname']);
	$Email = mysqli_real_escape_string($connection, $_POST['email']);
	$Password = mysqli_real_escape_string($connection, $_POST['password1']);
	$ConfirmedPassword = mysqli_real_escape_string($connection, $_POST['password2']);
	$University = mysqli_real_escape_string($connection,$_POST['University']);
	$Telephone = mysqli_real_escape_string($connection, $_POST['Telephone']);
	$Degree = mysqli_real_escape_string($connection, $_POST['Degree']);
	$Graduation = mysqli_real_escape_string($connection, $_POST['Graduation']);
	$Profile = mysqli_real_escape_string($connection, $_POST['profile']);
	$Resume = mysqli_real_escape_string($connection, $_POST['resume']);
  
	// form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Email)) { array_push($errors, "Email is required"); }
  if (empty($Password)) { array_push($errors, "Password is required"); }
  if ($Password != $ConfirmedPassword) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM studentusers WHERE email='$Email'  LIMIT 1";
  $result = mysqli_query($connection, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    
    if ($user['email'] === $Email) {
      array_push($errors, "email already exists");
    }
  }
  if (count($errors) == 0) {
    $password_hash = md5($Password);//encrypt the password before saving in the database
    $query = "INSERT INTO studentusers (email,password,Fullname,Currentuniv,telephone,Degree,Graduation,Resume,profilepicture) 
          VALUES ('$Email', '$password_hash', '$Fullname', '$University', '$Telephone','$Degree','$Graduation','$Resume','$Profile')";
    mysqli_query($connection, $query);
    // $_SESSION['username'] = $username;
    // $_SESSION['success'] = "You are now logged in";
    header('location:welcomejobseeker.php');
  }
  else
  {
    header('location:jobseekerregister.php');
  }
}
// Let's allow the user to login
if (isset($_POST['enter2'])) {
  $email = mysqli_real_escape_string($connection, $_POST['email1']);
  $password = mysqli_real_escape_string($connection, $_POST['password1']);

  if (empty($email)) {
    array_push($errors, "email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM studentusers WHERE email='$email' AND password='$password'";
    $results = mysqli_query($connection, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      header('location: jobseekerdashboard.php');
      
    }
    else {
      header('location: error.php');
      echo "Login failed";
    }
  }
}
 //updating biography

if (isset($_POST['Updatebio'])) {
  $email=$_SESSION['email'];
   $universityupdate = mysqli_real_escape_string($connection,$_POST['universityupdate']);
   $updateit = "UPDATE studentusers SET Currentuniv  = '$universityupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:jobseekerdashboard.php');
}
if (isset($_POST['Updatebio'])) {
  $email=$_SESSION['email'];
   $degreeupdate = mysqli_real_escape_string($connection,$_POST['degreeupdate']);
   $updateit = "UPDATE studentusers SET Degree  = '$degreeupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:jobseekerdashboard.php');
 }

if (isset($_POST['Updatebio'])) {
  $email=$_SESSION['email'];
   $graduationupdate = mysqli_real_escape_string($connection,$_POST['graduationupdate']);
   $updateit = "UPDATE studentusers SET Graduation  = '$graduationupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:jobseekerdashboard.php');
}
if (isset($_POST['Updatebio'])) {
  $email=$_SESSION['email'];
   $status = mysqli_real_escape_string($connection,$_POST['status']);
   $updateit = "UPDATE studentusers SET status  = '$status'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:jobseekerdashboard.php');
}

//updating about me text
if (isset($_POST['Updateaboutme'])) {
  $email=$_SESSION['email'];
   $aboutmeupdate = mysqli_real_escape_string($connection,$_POST['aboutmeupdate']);
   $updateit = "UPDATE studentusers SET Aboutme  = '$aboutmeupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:jobseekerdashboard.php');
}

//updating interest
if (isset($_POST['Updateinterests'])) {
  $email=$_SESSION['email'];
   $interestupdate = mysqli_real_escape_string($connection,$_POST['interest1']);
   $updateit = "UPDATE studentusers SET Interest1  = '$interestupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:jobseekerdashboard.php');
}
if (isset($_POST['Updateinterests'])) {
  $email=$_SESSION['email'];
   $interestupdate = mysqli_real_escape_string($connection,$_POST['interest2']);
   $updateit = "UPDATE studentusers SET Interest2  = '$interestupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:jobseekerdashboard.php');
}
if (isset($_POST['Updateinterests'])) {
  $email=$_SESSION['email'];
   $interestupdate = mysqli_real_escape_string($connection,$_POST['interest3']);
   $updateit = "UPDATE studentusers SET Interest3  = '$interestupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:jobseekerdashboard.php');
}

//updating skills
if (isset($_POST['Updateskills'])) {
  $email=$_SESSION['email'];
   $skillupdate = mysqli_real_escape_string($connection,$_POST['skill1']);
   $updateit = "UPDATE studentusers SET Skill1  = '$skillupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:jobseekerdashboard.php');
}
if (isset($_POST['Updateskills'])) {
  $email=$_SESSION['email'];
   $skillupdate = mysqli_real_escape_string($connection,$_POST['skill2']);
   $updateit = "UPDATE studentusers SET Skill2  = '$skillupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:jobseekerdashboard.php');
}
if (isset($_POST['Updateskills'])) {
   $email=$_SESSION['email'];
   $skillupdate = mysqli_real_escape_string($connection,$_POST['skill3']);
   $updateit = "UPDATE studentusers SET Skill3  = '$skillupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:jobseekerdashboard.php');
}
if (isset($_POST['saveaccountsettings'])) {
   $email=$_SESSION['email'];
   $fullnameupdate = mysqli_real_escape_string($connection,$_POST['fullnameupdate']);
   $updateit = "UPDATE studentusers SET Fullname  = '$fullnameupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:jobseekerdashboard.php');
}
if (isset($_POST['saveaccountsettings'])) {
   $email=$_SESSION['email'];
   $passwordhashed = md5($_POST['passwordupdate']);
   $passwordupdate = mysqli_real_escape_string($connection,$passwordhashed);
   $updateit = "UPDATE studentusers SET Password  = '$passwordupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:jobseekerdashboard.php');
}
if (isset($_POST['saveaccountsettings'])) {
   $email=$_SESSION['email'];
   $emailupdate = mysqli_real_escape_string($connection,$_POST['emailupdate']);
   $updateit = "UPDATE studentusers SET email  = '$emailupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:jobseekerdashboard.php');
}
if (isset($_POST['saveaccountsettings'])) {
   $email=$_SESSION['email'];
   $telephoneupdate = mysqli_real_escape_string($connection,$_POST['telephoneupdate']);
   $updateit = "UPDATE studentusers SET Telephone  = '$telephoneupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:jobseekerdashboard.php');
}
// Done updating part
//profile picture stuufss
$msg = "";
  $msg_class = "";
  if (isset($_POST['Updatepicture'])) {
    $email=$_SESSION['email'];
    // for the database
    $profileImageName = time() . '-' . $_FILES["updatepp"]["name"];
    // For image upload
    $target_dir = "Profilepictures - Jobseeker/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['updatepp']['size'] > 200000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger1";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger2";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["updatepp"]["tmp_name"], $target_file)) {
        $sql = "UPDATE studentusers SET profilepicture='$profileImageName' WHERE email='$email'";
        if(mysqli_query($connection, $sql)){
          header('location:jobseekerdashboard.php');
          $msg = "Image uploaded and saved in the Database";
          $msg_class = "alert-success";
        } else {
          $msg = "There was an error in the database";
          $msg_class = "alert-danger3";
        }
      } else {
        $error = "There was an error uploading the file";
        $msg = "alert-danger4";
      }
    }
  }
   // update

 
?>