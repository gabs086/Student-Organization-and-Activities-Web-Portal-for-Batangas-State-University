<?php 
include('../connect.php');

$date = $_POST["date"];
$name = $_POST["name"];
$year = $_POST["year"];
$sr = $_POST["sr"];
$dept = $_POST["dept"];
$reason = $_POST["reason"];
$idnumber = $_POST["idnumber"];
$offense = $_POST["offense"];
$other = $_POST["other"];
$campus= $_POST["campus"];
$course= $_POST["course"];

$save2=mysql_query("INSERT INTO idreplace (date,name,year,sr,dept,reason,idnumber,offense,other,campus,course) VALUES ('$date','$name','$year','$sr','$dept','$reason','$idnumber','$offense','$other','$campus','$course')");


		 echo "<script type=\"text/javascript\">window.alert('ID Replacement Record has been added.');window.location.href = 'record.php';</script>"; 

?>