<?php include('serverlesscompany.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Register - Employee seeker</title>
	<!-- For Registering accounts -->
	<link rel="stylesheet" type="text/css" href="Css/register.css">
	<!-- javascript -->
	<script type="text/javascript" src="java/java.js"></script>
</head>
<body>
	<div class="rectangle">
    <p>Already have an account? <a href="employeeseekerlogin.php">login</a></p> 
  </div> 
   <div id="Step1">
    <h1 class="step">Account Setup</h1>
    <!-- form for step1 -->
    <form id="registerform" method="post">
      <?php include('errorregister.php'); ?>
		<input type="email" name="email" placeholder="E-mail" required><br><br>
		<input type="password" name="password1" placeholder="Password" required><br><br>
		<input type="password" name="password2" placeholder="Confirm Password" required><br><br>
</div>	

 <div id="Step2company" >
    	<h1 class="step2company">Company Details</h1>
    <section id="step2formcompany">
    	<input type="text" name="CompanyName" placeholder="Company Name" required><br><br>
    	<input type="text" name="Telephone" placeholder="Telephone Number" required><br><br>
      <input type="text" name="Website" placeholder="Company Website" required><br><br>
    	<input type="text" name="Industry" placeholder="Company Industry" required><br><br>
    </section>
 </div>

 <div id="Step3">
 	<h1 class="step3">Documents upload</h1>
   <section id="step3form">
 	<label>Company Bio (Only pdf)</label><br>
 	<input type="file" name="Companybio" accept="Application/pdf" required>
  </section>	
 <input class="next finish" type="submit" name="submitemployeeseeker" value="Finish">
</form>
</div>
<!-- List of all next buttons to be clicked to arrive to the next stage -->
<button class="next" id="back1company" onclick="step1companydisplay()">Back</button>
<button class="next" id="back2company" onclick="step2companydisplay()">Back</button>
<button class="next" id="next1" onclick="step2companydisplay()">Next</button>
<button class="nextcompany" id="next2company" onclick="step3companydisplay()">Next</button>
</body>
</html>