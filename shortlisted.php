<?php 
include('serverless.php');
$dbconnect=mysqli_connect('localhost', 'HABUWITEKA', '17170', 'talentmatch');
 ?>
<?php
    $name = isset($_GET['Jobname']) ? $_GET['Jobname'] : '';
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Shortlisted candidates</title>
	<link rel="stylesheet" type="text/css" href="Admin/admin.css">
</head>
<body>
       <table id="tablejobs">
       	<tr>
       		<th>Candidate</th>
       		<th>Resume</th>
       		<th>Cover letter</th>
       	</tr>

       	<?php 
       	   $decision = "declined";
           $result = mysqli_query($dbconnect, "SELECT * FROM applications where Jobname='$name' AND Status = '$decision'");
           while ($myresult = mysqli_fetch_assoc($result)) {
           	    $applicantemaill = $myresult['Email'];
     $applicantdata = mysqli_query($dbconnect, "SELECT * FROM studentusers where email = '$applicantemaill'" );
     while ($data = mysqli_fetch_array($applicantdata)) {
         $applicantname = $data['Fullname'];
     }
           
       	 ?>

       	 <tr>
       	 	<td> <?php echo $applicantname;  ?></td>
       	 	<td><a class="viewresume" href="Admin/Jobresumes/<?php echo $myresult['Resume'] ?>" target="pdf-frame">View Resume</a></td>
       	 	<td><a class="viewresume" href="Admin/Jobresumes/<?php echo $myresult['Coverletter'] ?>" target="pdf-frame">View Resume</a></td>
       	 </tr>
       	  <?php 
   
  }?>

       </table>
</body>
</html>