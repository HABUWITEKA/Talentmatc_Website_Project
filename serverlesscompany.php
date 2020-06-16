<?php 
session_start();
$errors = array(); 

// connect to the database
$connection = mysqli_connect('localhost', 'HABUWITEKA', '17170', 'talentmatch');

//let's start by registering a JOBSEEKER and keep the human in our db

if (isset($_POST['submitemployeeseeker'])) {
	//Grabbing all that the user entere

	$Companyname = mysqli_real_escape_string($connection,$_POST['CompanyName']);
	$Email = mysqli_real_escape_string($connection, $_POST['email']);
	$Password = mysqli_real_escape_string($connection, $_POST['password1']);
	$ConfirmedPassword = mysqli_real_escape_string($connection, $_POST['password2']);
	$Telephone = mysqli_real_escape_string($connection, $_POST['Telephone']);
	$Website = mysqli_real_escape_string($connection, $_POST['Website']);
  $Industry = mysqli_real_escape_string($connection, $_POST['Industry']);
	$Bio = mysqli_real_escape_string($connection, $_POST['Companybio']);
  $location = mysqli_real_escape_string($connection, $_POST['Location']);

	// form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Email)) { array_push($errors, "Email is required"); }
  if (empty($Password)) { array_push($errors, "Password is required"); }
  if ($Password != $ConfirmedPassword) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM comapnyusers WHERE email='$Email'";
  $result = mysqli_query($connection, $user_check_query);
  
   if (mysqli_num_rows($result) > 1) {
    array_push($errors, "Email is already registered");
  }

  if (count($errors) == 0) {
    $password_hash = md5($Password);//encrypt the password before saving in the database

    $query = "INSERT INTO comapnyusers (companyname,email, telephone,password,Website,Industry,location) VALUES ('$Companyname','$Email','$Telephone','$password_hash','$Website','$Industry','$location')";
    mysqli_query($connection, $query);
    // $_SESSION['username'] = $username;
    // $_SESSION['success'] = "You are now logged in";
    header('location:welcomeemployee.php');
  }
  // else
  // {
  //   header('location:employeeseekerregister.php');
  // }

}
// Let's allow the user to login
if (isset($_POST['enter1'])) {
  $email = mysqli_real_escape_string($connection, $_POST['email1']);
  $password = mysqli_real_escape_string($connection, $_POST['password1']);
  $test = "SELECT * FROM comapnyusers WHERE email='$email'";
  $result = mysqli_query($connection, $test);
  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (mysqli_num_rows($result) == 0) {
    array_push($errors, "Email is not registered");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM comapnyusers WHERE email='$email' AND password='$password'";
    $results = mysqli_query($connection, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      header('location: employeeseekerdashboard.php');
    }
    else {
      array_push($errors, "Email and Password do not match");
    }
  }
}
//updating password
if (isset($_POST['saveaccountsettings'])) {
  $email = $_SESSION['email'];
  $name= mysqli_real_escape_string($connection,$_POST['companynameupdate']);
  $telephone = mysqli_real_escape_string($connection,$_POST['telephoneupdate']);
  $password = mysqli_real_escape_string($connection, $_POST['passwordupdate']);
  $password_hidden = md5($password);
  $update = "UPDATE comapnyusers SET companyname='$name', telephone='$telephone', password='$password_hidden' WHERE email='$email'";
  mysqli_query($connection,$update);
  header('location:employeeseekerlogin.php');
}
//updating short bio of company
if (isset($_POST['Updatecompanybio'])) {
   $email=$_SESSION['email'];
   $industryupdate = mysqli_real_escape_string($connection,$_POST['industryupdate']);
   $updateit = "UPDATE comapnyusers SET Industry  = '$industryupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:employeeseekerdashboard.php');
}
if (isset($_POST['Updatecompanybio'])) {
   $email=$_SESSION['email'];
   $websiteupdate = mysqli_real_escape_string($connection,$_POST['websiteupdate']);
   $updateit = "UPDATE comapnyusers SET website  = '$websiteupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:employeeseekerdashboard.php');
}
if (isset($_POST['Updatecompanybio'])) {
   $email=$_SESSION['email'];
   $locationupdate = mysqli_real_escape_string($connection,$_POST['locationupdate']);
   $updateit = "UPDATE comapnyusers SET location  = '$locationupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:employeeseekerdashboard.php');
}
if (isset($_POST['Updatewhoweare'])) {
   $email=$_SESSION['email'];
   $whoweareupdate = mysqli_real_escape_string($connection,$_POST['whoweareupdate']);
   $updateit = "UPDATE comapnyusers SET whoarewe  = '$whoweareupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:employeeseekerdashboard.php');
}


//updatemission and vision
if (isset($_POST['Updatemission'])) {
   $email=$_SESSION['email'];
   $missionupdate = mysqli_real_escape_string($connection,$_POST['ourmission']);
   $updateit = "UPDATE comapnyusers SET mission  = '$missionupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:employeeseekerdashboard.php');
}
if (isset($_POST['Updatevision'])) {
   $email=$_SESSION['email'];
   $visionupdate = mysqli_real_escape_string($connection,$_POST['ourvision']);
   $updateit = "UPDATE comapnyusers SET vision  = '$visionupdate'  WHERE email='$email'";
   mysqli_query($connection, $updateit);
   header('location:employeeseekerdashboard.php');
}
//profile picture stuufss
$msg = "";
  $msg_class = "";
  if (isset($_POST['Updatelogo'])) {
    $email=$_SESSION['email'];
    // for the database
    $profileImageName = time() . '-' . $_FILES["updatepp"]["name"];
    // For image upload
    $target_dir = "companylogos/";
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
        $sql = "UPDATE comapnyusers SET companylogo='$profileImageName' WHERE email='$email'";
        if(mysqli_query($connection, $sql)){
          header('location:employeeseekerdashboard.php');
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

  //post a job and save it in the database

  if (isset($_POST['jobsubmit'])) {
   $email=$_SESSION['email'];
   $jobtitle = mysqli_real_escape_string($connection,$_POST['jobtitle']);
   $jobdeadline = mysqli_real_escape_string($connection,$_POST['jobdeadline']);
   $joblocation = mysqli_real_escape_string($connection,$_POST['joblocation']);
   $jobfield = mysqli_real_escape_string($connection,$_POST['jobfield']);
   //$jobdescription = mysqli_real_escape_string($connection,$_POST['jobdescription']);

   $query = "INSERT INTO 
   jobsposting (Email,Jobtitle,JobIndustry,Deadline,location) 
   VALUES ('$email', '$jobtitle','$Jobindustry', '$jobdeadline' , '$joblocation')";
   mysqli_query($connection, $query);
   header('location:#');
   //pdf saving
   $profileImageName = time() . '-' . $_FILES["jobdescriptionpdf"]["name"];
    // For pdf upload
    $target_dir = "Jobdescriptions/";
    $target_file = $target_dir . basename($profileImageName);
    
      if(move_uploaded_file($_FILES["jobdescriptionpdf"]["tmp_name"], $target_file)) {
        $sql = "UPDATE jobsposting SET jobdescriptionpdf='$profileImageName' WHERE email='$email'";
        if(mysqli_query($connection, $sql)){
          header('location:employeeseekerdashboard.php');
      }
  }
}
  if (isset($_POST['internshipsubmit'])) {
   $email=$_SESSION['email'];
   $internshiptitle = mysqli_real_escape_string($connection,$_POST['internshiptitle']);
   $internshipdeadline = mysqli_real_escape_string($connection,$_POST['internshipdeadline']);
   $internshiplocation = mysqli_real_escape_string($connection,$_POST['internshiplocation']);
   $internshipfield = mysqli_real_escape_string($connection,$_POST['internshipfield']);
   // $internshipdescription = mysqli_real_escape_string($connection,$_POST['internshipdescriptionpdf']);

   $query = "INSERT INTO 
   internshipposting (Email,Internshiptitle,Internshipindustry,Deadline,location) 
   VALUES ('$email', '$internshiptitle','$internshipfield','$internshipdeadline' , '$internshiplocation')";
   mysqli_query($connection, $query);
   header('location:#');
   //pdf saving
   $profileImageName = time() . '-' . $_FILES["internshipdescriptionpdf"]["name"];
    // For pdf upload
    $target_dir = "internshipdescriptions/";
    $target_file = $target_dir . basename($profileImageName);
    
      if(move_uploaded_file($_FILES["internshipdescriptionpdf"]["tmp_name"], $target_file)) {
        $sql = "UPDATE internshipposting SET internshipdescriptionpdf='$profileImageName' WHERE email='$email'";
        if(mysqli_query($connection, $sql)){
          header('location:employeeseekerdashboard.php');
      }
  }
  }
if (isset($_POST['Deletejob'])) {
    $id = mysqli_real_escape_string($connection, $_POST['ID']);
    $update1= "DELETE from jobsposting WHERE ID='$id'";
    mysqli_query($connection, $update1);
    header('location:employeeseekerdashboard.php');
    # code...
}
if (isset($_POST['Deleteinternship'])) {
    $id = mysqli_real_escape_string($connection, $_POST['ID']);
    $update1= "DELETE from internshipposting WHERE ID='$id'";
    mysqli_query($connection, $update1);
    header('location:employeeseekerdashboard.php');
    # code...
}

?>