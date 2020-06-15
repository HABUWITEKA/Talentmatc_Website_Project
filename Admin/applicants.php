<?php
include('serverless.php');
//include('serverlesscompany.php');
$dbconnect=mysqli_connect('localhost', 'HABUWITEKA', '17170', 'talentmatch');


?>

<?php 

//getting name from url

$name = isset($_GET['Jobname']) ? $_GET['Jobname'] : '';
$resul = mysqli_query($dbconnect, "SELECT * FROM applications where Jobname='$name'");
 while ($mydata = mysqli_fetch_array($resul)) 
   {
      $applicantemail = $mydata['Email'];
      $applicantstatus = $mydata['Status'];
   }

 if (isset($_POST['savestatus'])) {
   $status = mysqli_real_escape_string($dbconnect,$_POST['status']);
   $id = mysqli_real_escape_string($dbconnect,$_POST['applicationid']);
   $updateit = "UPDATE applications SET Status  = '$status'  WHERE ApplicationId='$id'";
   mysqli_query($dbconnect, $updateit);
   
}



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Job Applicants - <?php echo $name; ?></title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
   <table id="tablejobs">
   	<tr>
      <th>Id</th>
   		<th>Applicant's Name</th>
   		<th>Resume</th>
   		<th>Cover letter</th>
   		<th>Status</th>
      <th></th>
      <th>Final decision</th>
   	</tr>
     <?php 
  
  $result = mysqli_query($dbconnect, "SELECT * FROM applications where Jobname='$name'");
  
  while ($applicant = mysqli_fetch_array($result)) 
   {  
     $applicantemaill = $applicant['Email'];
     $applicantdata = mysqli_query($dbconnect, "SELECT * FROM studentusers where email = '$applicantemaill'" );
     while ($data = mysqli_fetch_array($applicantdata)) {
         $applicantname = $data['Fullname'];
     }

 ?>
      <tr>
         <td><?php echo $applicant['ApplicationId']; ?></td>
         <td><?php echo $applicantname ?></td>
         <td><a class="viewresume" href="Jobresumes/<?php echo $applicant['Resume'] ?>" target="pdf-frame">View Resume</a></td>
         <td><a class="viewresume" href="Jobcoverletters/<?php echo $applicant['Coverletter'] ?>" target="pdf-frame">View Resume</a></td>
         <td>
            <form method="post">
               <select name="status" placeholder="Decision">
                  <option></option>
                  <option>Shortlisted</option>
                  <option>Declined</option>
               </select>
           
         </td>
         <td> 
         <input type="hidden" name="applicationid" value="<?php echo $applicant['ApplicationId']; ?>">
         <input type="submit" name="savestatus" value="Save">
         </form>
      </td>
      <td><?php echo $applicant['Status'] ?></td>
      </tr>
  <?php 
   
  }?>

  
   </table>
</body>
</html>