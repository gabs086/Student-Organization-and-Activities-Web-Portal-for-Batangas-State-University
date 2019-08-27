<?php 
include('../connect.php');


$id= $_GET['id'];
$status = 'Found';

mysql_query("UPDATE lost SET status='$status' WHERE id='$id'");

	echo "<script type=\"text/javascript\">window.alert('Item found.');window.location.href = 'lost.php';</script>"; 		


?>

