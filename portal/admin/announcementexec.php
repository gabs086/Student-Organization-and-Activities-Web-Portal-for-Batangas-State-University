<?php 
include('../connect.php');

$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$venue = $_POST['venue'];
$description = $_POST['description'];
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

    if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) 

		


		

	$save1=mysql_query("INSERT INTO announcement (name,date,description,pic,time,venue) VALUES ('$name','$date','$description','$picname','$time','$venue')");

	
	 echo "<script type=\"text/javascript\">window.alert('Announcement has been posted.');window.location.href = 'index.php';</script>"; 

?>


