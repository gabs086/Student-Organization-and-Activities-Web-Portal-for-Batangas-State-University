<?php 
include('../connect.php');

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$date = $_POST['date'];
$campus = $_POST['campus'];
$type = 'org';
		$result=mysql_query("SELECT * FROM login WHERE username='$username'")or die (mysql_error());
	
$count=mysql_num_rows($result);
if($count> 0) {
			 echo "<script type=\"text/javascript\">window.alert('The user you are trying to add is already registered.');window.location.href = 'index.php';</script>"; 
} else {
$save1=mysql_query("INSERT INTO org (name,username,password,date,campus) VALUES ('$name','$username','$password','$date','$campus')");
$save2=mysql_query("INSERT INTO login (username,password,type,campus) VALUES ('$username','$password','$type','$campus')");


		 echo "<script type=\"text/javascript\">window.alert('Student Organization has been created.');window.location.href = 'account.php';</script>"; 
}
?>