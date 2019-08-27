<?php 
include('../connect.php');

$id= $_GET['id'];
 $sql = "delete from reports where id='$id'";
 mysql_query( $sql);

	echo "<script type=\"text/javascript\">window.alert('Report has beed deleted.');window.location.href = 'reports.php';</script>"; 		


?>

