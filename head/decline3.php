<?php
$id = $_GET['id'];
$name = $_GET['name'];
$format = $_GET['format'];
?>
<h3>Reason to Decline</h3>
<form action="decline1.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id ?>">
<input type="hidden" name="name" value="<?php echo $name ?>">
<input type="hidden" name="format" value="<?php echo $format ?>">
<textarea style="width:350px;height:200px" name="reason">
</textarea>
<input type="submit" value="Decline Request" name="submit" class="myButton" style="height:50px">
</form>