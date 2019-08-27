<?php 
include('../connect.php');


$id= $_GET['id'];
$status = 'Decline';

mysql_query("UPDATE activities SET status='$status' WHERE id='$id'");

	echo "<script type=\"text/javascript\">window.alert('Event request has been delined.');window.location.href = 'ann1.php';</script>"; 		


?>

