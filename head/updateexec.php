<?php
include('../connect.php');
$id = $_POST['id'];
$category = $_POST['category'];
	$name = $_POST['name'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$venue = $_POST['venue'];
	$description = $_POST['description'];
		mysql_query("UPDATE announcement SET name='$name' WHERE id='$id'");
		mysql_query("UPDATE announcement SET date='$date' WHERE id='$id'");
		mysql_query("UPDATE announcement SET time='$time' WHERE id='$id'");
		mysql_query("UPDATE announcement SET venue='$venue' WHERE id='$id'");
		mysql_query("UPDATE announcement	SET description='$description' WHERE id='$id'");
		mysql_query("UPDATE announcement	SET category='$category' WHERE id='$id'");
		
		echo '<script>alert("Announcement has been updated.");window.location="news.php";</script>';
		?>