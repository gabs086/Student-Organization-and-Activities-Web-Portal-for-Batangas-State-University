<?php 
include('../connect.php');

$id= $_GET['id'];
 $sql = "delete from orga where id='$id'";
 mysql_query( $sql);

	echo "<script type=\"text/javascript\">window.alert('Organization has been deleted.');window.location.href = 'ann.php';</script>"; 		


?>

