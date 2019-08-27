<?php 
include('../connect.php');


$id= $_POST['id'];
$status = 'Declined';
$name = $_POST["name"];
$format = $_POST["format"];
$reason = $_POST["reason"];
$notification = '"'.$format.'" request has been declined by SOA Director. Reason: '.$reason;
mysql_query("UPDATE studformat SET status='$status' WHERE id='$id'");
$save2=mysql_query("INSERT INTO notification (username,notification) VALUES ('$name','$notification')");
	echo "<script type=\"text/javascript\">window.alert('Activity request has been declined.');window.location.href = 'app.php';</script>"; 		


?>

