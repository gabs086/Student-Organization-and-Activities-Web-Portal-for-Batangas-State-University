<?php
include ('../connect.php');



$id = $_POST['id'];
$orgname=$_POST['orgname'];
$username=$_POST['username'];
$status = 'Approved';
$name = $_POST['name'];
$description = $_POST['description'];
$campus = $_POST['campus'];

$notification =  $_POST['notification'];

$notification2= '"'.$name.'" Report, is needed to be revised. Reason: '.$notification;


mysql_query("UPDATE reports SET status='Approved' WHERE id='$id'");
$save2=mysql_query("INSERT INTO notification (username,notification) VALUES ('$orgname','$notification2')");
	echo "<script type=\"text/javascript\">window.alert('Sent.');window.location.href = 'reports.php';</script>"; 


?>