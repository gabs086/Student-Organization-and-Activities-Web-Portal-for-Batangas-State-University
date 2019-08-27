<?php 
include('../connect.php');

$name = $_POST['name'];
$orgname = $_POST['orgname'];
$username = $_POST['username'];
$date = $_POST['date'];
$time = $_POST['time'];
$venue = $_POST['venue'];
$description = $_POST['description'];
$status = 'Pending';
	if(isset($_FILES['pic'])){
    $name_array = $_FILES['pic']['name'];
    $tmp_name_array = $_FILES['pic']['tmp_name'];
    $type_array = $_FILES['pic']['type'];
    $size_array = $_FILES['pic']['size'];
    $error_array = $_FILES['pic']['error'];
    for($i = 0; $i < count($tmp_name_array); $i++){
        if(move_uploaded_file($tmp_name_array[$i], "../uploads/".$name_array[$i])){
			
			
		}

		   else {
		   
        }
		$pics="../uploads/" .$name_array;
		$picname = $name_array;
		}
		}
		
		// sample
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["pic"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["pic"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
    } else {
    }
}
		


		

	$save1=mysql_query("INSERT INTO activities (name,date,description,pic,time,venue,orgname,username,status) VALUES ('$name','$date','$description','$picname','$time','$venue','$orgname','$username','$status')");

	
	 echo "<script type=\"text/javascript\">window.alert('Event has been created. Please wait for SOA director to approve this event');window.location.href = 'index.php';</script>"; 

?>


