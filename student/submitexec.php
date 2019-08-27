<?php 
include('../connect.php');

$campus = $_POST['campus'];
$namee = $_POST['namee'];
$age = $_POST['age'];
$connum = $_POST['connum'];
$activity = $_POST['activity'];
$sr = $_POST['sr'];
$year = $_POST['year'];
$department = $_POST['department'];
$section = $_POST['section'];


$save2=mysql_query("INSERT INTO recordassess (campus,namee,age,connum,activity,sr,year,department,section) VALUES ('$campus','$namee','$age','$connum','$activity','$sr','$year','$department','$section')");


		 echo "<script type=\"text/javascript\">window.alert('Activity assessment has been added.You will be notified in your contact number.');window.location.href = 'assessstud.php';</script>"; 
?>