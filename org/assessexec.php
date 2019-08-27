<?php 
include('../connect.php');

$acassess = $_POST['acassess'];
$date = $_POST['date'];
$acreq = $_POST['acreq'];
$campus = $_POST['campus'];
$description = $_POST['description'];
$org = $_POST['org'];
$save2=mysql_query("INSERT INTO assess (acassess,date,acreq,campus,description,org) VALUES ('$acassess','$date','$acreq','$campus','$description','$org')");


		 echo "<script type=\"text/javascript\">window.alert('Assessment has been added.');window.location.href = 'assess.php';</script>"; 
?>