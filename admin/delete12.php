<?php 
include('../connect.php');

$id= $_GET['id'];
 $sql = "delete from login where username='$id'";
 mysql_query( $sql);
 $sql = "delete from org where username='$id'";
 mysql_query( $sql);

	echo "<script type=\"text/javascript\">window.alert('Student Organization has been deleted.');window.location.href = 'account.php';</script>"; 		


?>

