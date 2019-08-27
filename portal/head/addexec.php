<?php 
include('../connect.php');

$name = $_POST['organization'];
$head = $_POST['head'];
$username = $_POST['username'];
$password = $_POST['password'];
$description = $_POST['description'];
$type = 'org';
		$result=mysql_query("SELECT * FROM login WHERE username='$username'")or die (mysql_error());
	
$count=mysql_num_rows($result);
if($count> 0) {
			 echo "<script type=\"text/javascript\">window.alert('The user you are trying to add is already registered.');window.location.href = 'index.php';</script>"; 
} else {
$save1=mysql_query("INSERT INTO org (name,head,username,password,description) VALUES ('$name','$head','$username','$password','$description')");
$save2=mysql_query("INSERT INTO login (username,password,type) VALUES ('$username','$password','$type')");


		 echo "<script type=\"text/javascript\">window.alert('Student Organization has been created.');window.location.href = 'index.php';</script>"; 
}
?>