<?php 
include('../connect.php');
$date = $_POST["date"];
$name = $_POST["name"];
$year = $_POST["year"];
$sr = $_POST["sr"];
$campus = $_POST["campus"];
$dept = $_POST["dept"];
$reason = $_POST["reason"];
$idnumber = $_POST["idnumber"];
$offense = $_POST["offense"];
$other = $_POST["other"];


$save2=mysql_query("INSERT INTO idreplace (date,name,year,sr,campus,dept,reason,idnumber,offense,other) VALUES ('$date','$name','$year','$sr','$campus','$dept','$reason','$idnumber','$offense','$other')");


		 echo "<script type=\"text/javascript\">window.alert('ID Replacement Record has been added.');window.location.href = 'record.php';</script>"; 

?>