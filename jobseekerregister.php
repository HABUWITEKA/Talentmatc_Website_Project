<?php include('serverless.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register - Job seeker</title>
	<!-- For Registering accounts -->
	<link rel="stylesheet" type="text/css" href="Css/register.css">
	<!-- javascript -->
	<script type="text/javascript" src="java/java.js"></script>
</head>
<body>
	<div class="rectangle">
    <p style="position: relative;">Already have an account? <a href="jobseekerlogin.php">login</a></p>
  </div> 
   <div id="Step1">
	  
    <h1 class="step">Account Setup</h1>
    <!-- form for step1 -->
    <form id="registerform" method="post" enctype="multipart/form-data">
      <?php include('errorregister.php'); ?>
		<input type="email" name="email" placeholder="E-mail" required><br><br>
		<input type="password" name="password1" placeholder="Password" required><br><br>
		<input type="password" name="password2" placeholder="Confirm Password" required><br><br>
   </div>	
 <div id="Step2">
    	<h1 class="step2">Personal Details</h1>
    <section id="step2form">	
    	<input type="text" name="Fullname" placeholder="Full Name" required><br><br>
    	<input type="text" name="Telephone" placeholder="Telephone Number" required><br><br>
    	<input type="text" name="University" placeholder="University you attended" required><br><br>
    	<input type="text" name="Degree" placeholder="Degree(Faculty)" required="fill it"><br><br>
    	<input type="Month" name="Graduation" placeholder="Date of graduation" value="January" required>
    </section>
 </div>
 <div id="Step3">
 	<h1 class="step3">Documents upload</h1>
   <section id="step3form">
 	<label>Resume/CV (Pdf only)</label><br>
 	<input type="file" name="resume" accept="Application/pdf" required>
  </section>	

 <input class="next finish" type="submit" name="submitjobseeker" value="Finish">
</form>
 </div>
<!-- List of all next buttons to be clicked to arrive to the next stage -->
<button class="next back1" id="back1" onclick="step1display()">Back</button>
<button class="next back2" id="back2" onclick="step2display()">Back</button>
<button class="next" id="next1" onclick="step2display()">Next</button>
<button class="next" id="next2" onclick="step3display()">Next</button>
</body>
</html>