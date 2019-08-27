<?php 
include('../connect.php');


$id= $_GET['id'];
$status = 'Approved';

mysql_query("UPDATE reports SET status='$status' WHERE id='$id'");

	echo "<script type=\"text/javascript\">window.alert('Student Organizational report has been approved and uploaded.');window.location.href = 'reports.php';</script>"; 		


?>

