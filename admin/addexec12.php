<?php 
include('../connect.php');

$campus = $_POST['campus'];
$department = $_POST['department'];
$description = $_POST['description'];
$orgname = $_POST['orgname'];
$orgpres = $_POST['orgpres'];
$orgad = $_POST['orgad'];
$members = $_POST['members'];
$officers = $_POST['officers'];
$date = $_POST['date'];
$save1=mysql_query("INSERT INTO orga (campus,department,description,orgname,orgpres,orgad,members,officers,date) VALUES ('$campus','$department','$description','$orgname','$orgpres','$orgad','$members','$officers','$date')");


		 echo "<script type=\"text/javascript\">window.alert('Student Organization has been created.');window.location.href = 'ann.php';</script>"; 

?>