		<?php
include('../connect.php');
$id = $_GET['id'];
$result = mysql_query("SELECT * FROM announcement WHERE id = '$id'");
while($row = mysql_fetch_array($result))
{
	$name = $row['name'];
	$date = $row['date'];
	$description = $row['description'];
	$image = $row['pic'];
	$time = $row['time'];
	$venue = $row['venue'];
	$id = $row['id'];
			
}
?>
<center>
<img src="../uploads/<?php echo $image ?>" width="600px" height="350px">
<table>
	<tr>	
		<td>Event Name:</td>
		<td>&nbsp;</td>
		<td><?php echo $name ?></td>
	</tr>
	<tr>	
		<td>Date:</td>
		<td>&nbsp;</td>
		<td><?php echo $date ?></td>
	</tr>
	<tr>	
		<td>Time:</td>
		<td>&nbsp;</td>
		<td><?php echo $time ?></td>
	</tr>
	<tr>	
		<td>Venue:</td>
		<td>&nbsp;</td>
		<td><?php echo $venue ?></td>
	</tr>
	<tr>	
		<td>Description:</td>
		<td>&nbsp;</td>
		<td><?php echo $description ?></td>
	</tr>

</table>