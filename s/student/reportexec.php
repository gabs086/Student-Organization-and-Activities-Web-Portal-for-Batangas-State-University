<?php 
include('../connect.php');

$name = $_POST['name'];
$orgname = $_POST['orgname'];
$username = $_POST['username'];
$description = $_POST['description'];
	if(isset($_FILES['pic'])){
    $name_array = $_FILES['pic']['name'];
    $tmp_name_array = $_FILES['pic']['tmp_name'];
    $type_array = $_FILES['pic']['type'];
    $size_array = $_FILES['pic']['size'];
    $error_array = $_FILES['pic']['error'];
    for($i = 0; $i < count($tmp_name_array); $i++){
        if(move_uploaded_file($tmp_name_array[$i], "../reports/".$name_array[$i])){
			
			
		}

		   else {
		   
        }
		$pics="../reports/" .$name_array;
		$picname = $name_array;
		}
		}
		
		// sample
$target_dir = "../reports/";
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
    move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file);


		


		

	$save1=mysql_query("INSERT INTO reports (name,description,file,username,orgname) VALUES ('$name','$description','$picname','$username','$orgname')");

	
	 echo "<script type=\"text/javascript\">window.alert('Report has been uploaded');window.location.href = 'reports.php';</script>"; 

?>


