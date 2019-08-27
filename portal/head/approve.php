<?php 
include('../connect.php');


$id= $_GET['id'];
$status = 'Approved';

mysql_query("UPDATE activities SET status='$status' WHERE id='$id'");

	echo "<script type=\"text/javascript\">window.alert('Event request has been approved.');window.location.href = 'ann1.php';</script>"; 		


?>

