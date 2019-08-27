<?php 
include('../connect.php');


$name = $_POST["name"];
$sr = $_POST["sr"];
$course = $_POST["course"];
$year = $_POST["year"];
$campus = $_POST["campus"];
$dept = $_POST["dept"];
$details = $_POST["details"];
$contact = $_POST["contact"];
$status = 'Unclaimed/Unfound';

		

		

	$save1=mysql_query("INSERT INTO lost (name,sr,course,year,campus,dept,details,contact,status) VALUES ('$name','$sr','$course','$year','$campus','$dept','$details','$contact','$status')");

	
	 echo "<script type=\"text/javascript\">window.alert('Lost Item Report has been Submitted');window.location.href = 'index.php';</script>"; 

?>


