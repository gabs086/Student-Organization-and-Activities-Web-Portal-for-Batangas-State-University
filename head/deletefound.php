<?php 
include('../connect.php');

$id= $_GET['id'];
 $sql = "delete from found where id='$id'";
 mysql_query( $sql);

	echo "<script type=\"text/javascript\">window.alert('Found Item Report has been deleted.');window.location.href = 'lost.php';</script>"; 		


?>

