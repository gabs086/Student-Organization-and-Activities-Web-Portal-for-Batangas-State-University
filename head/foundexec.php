<?php 
include('../connect.php');

$namefound = $_POST['namefound'];
$founditem = $_POST['founditem'];
$campus = $_POST['campus'];
$date = $_POST['date'];

$save1=mysql_query ("INSERT INTO found (namefound,founditem,campus,date) VALUES ('$namefound','$founditem','$campus','$date')");

echo "<script type=\"text/javascript\">window.alert('Found item has been recorded');window.location.href = 'lost.php';</script>"; 

?>