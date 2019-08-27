<?php 
include('../connect.php');


$id= $_GET['id'];
$status = 'Claimed';

mysql_query("UPDATE lost SET status='$status' WHERE id='$id'");

	echo "<script type=\"text/javascript\">window.alert('Item has been claimed.');window.location.href = 'lost.php';</script>"; 		


?>

