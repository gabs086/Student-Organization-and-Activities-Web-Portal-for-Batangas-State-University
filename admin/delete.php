<?php 
include('../connect.php');

$id= $_GET['id'];
 $sql = "delete from announcement where id='$id'";
 mysql_query( $sql);

	echo "<script type=\"text/javascript\">window.alert('Announcement has beed deleted.');window.location.href = 'news.php';</script>"; 		


?>

