// Done updating part
//profile picture stuufss
  $msg = "";
  $msg_class = "";
  if (isset($_POST['Updatepicture'])) {
    $email=$_SESSION['email'];
    $profileImageName = time() . '-' . $_FILES["updatepp"]["name"];
    $target_dir = "resumes/";
    $target_file = $target_dir . basename($profileImageName);
    move_uploaded_file($_FILES["updatepp"]["tmp_name"], $target_file));
    profilepicture='$profileImageName'
  }


  // 