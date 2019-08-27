<?php 
include('../connect.php');

$id= $_GET['id'];
 $sql = "delete from assess where id='$id'";
 mysql_query( $sql);

	echo "<script type=\"text/javascript\">window.alert('Activity has been deleted.');window.location.href = 'assess.php';</script>"; 		


?>

