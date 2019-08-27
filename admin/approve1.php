<?php 
include('../connect.php');


$id= $_GET['id'];
$status = 'Approved';
$name = $_GET["name"];
$format = $_GET["format"];
$notification = '"'.$format.'" request has been approved by SOA Director';
mysql_query("UPDATE studformat SET status='$status' WHERE id='$id'");
$save2=mysql_query("INSERT INTO notification (username,notification) VALUES ('$name','$notification')");
	echo "<script type=\"text/javascript\">window.alert('Activity request has been approved.');window.location.href = 'app.php';</script>"; 		


?>

