<?php 
include('../connect.php');
$id =$_POST['id'];
$campus = $_POST['campus'];
$department = $_POST['department'];
$description = $_POST['description'];
$orgname = $_POST['orgname'];
$orgpres = $_POST['orgpres'];
$orgad = $_POST['orgad'];
$members = $_POST['members'];
$officers = $_POST['officers'];
$date = $_POST['date'];

mysql_query("UPDATE orga SET campus='$campus' WHERE id='$id'");
mysql_query("UPDATE orga SET department='$department' WHERE id='$id'");
mysql_query("UPDATE orga SET description='$description' WHERE id='$id'");
mysql_query("UPDATE orga SET orgname='$orgname' WHERE id='$id'");
mysql_query("UPDATE orga SET orgpres='$orgpres' WHERE id='$id'");
mysql_query("UPDATE orga SET orgad='$orgad' WHERE id='$id'");
mysql_query("UPDATE orga SET members='$members' WHERE id='$id'");
mysql_query("UPDATE orga SET officers='$officers' WHERE id='$id'");
mysql_query("UPDATE orga SET date='$date' WHERE id='$id'");


		 echo "<script type=\"text/javascript\">window.alert('Student Organization has been updated.');window.location.href = 'ann.php';</script>"; 

?>