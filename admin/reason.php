<?php
$id = $_GET['id'];
$orgname=$_GET['orgname'];
$username=$_GET['username'];
$name = $_GET['name'];
$description = $_GET['description'];
$campus = $_GET['campus'];
?>
<h3>Reason to Revision:</h3>
<form action="reasonaction.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id ?>">
<input type="hidden" name="orgname" value="<?php echo $orgname ?>">
<input type="hidden" name="username" value="<?php echo $username ?>">
<input type="hidden" name="name" value="<?php echo $name ?>">
<input type="hidden" name="description" value="<?php echo $description ?>">
<input type="hidden" name="campus" value="<?php echo $campus ?>">
<textarea style="width:350px;height:200px" name="notification">
</textarea>
<input type="submit" value="Send" name="submit" class="myButton" style="height:50px">
</form>