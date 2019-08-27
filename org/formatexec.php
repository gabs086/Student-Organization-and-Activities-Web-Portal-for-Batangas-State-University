<?php 
include('../connect.php');

$name = $_POST['name'];
$org = $_POST['org'];
$campus = $_POST['campus'];
$campus = $_POST['campus'];
	if(isset($_FILES['file_array'])){
    $name_array = $_FILES['file_array']['name'];
    $tmp_name_array = $_FILES['file_array']['tmp_name'];
    $type_array = $_FILES['file_array']['type'];
    $size_array = $_FILES['file_array']['size'];
    $error_array = $_FILES['file_array']['error'];
    for($i = 0; $i < count($tmp_name_array); $i++){
        if(move_uploaded_file($tmp_name_array[$i], "../studformat/".$name_array[$i])){
			
			
		}

		   else {
		   
        }
		$file_arrays="../studformat/" .$name_array;
		$picname= $name_array;
		}
		}
		
		// sample
$target_dir = "../studformat/";
$target_file = $target_dir . basename($_FILES["file_array"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file_array"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

    if (move_uploaded_file($_FILES["file_array"]["tmp_name"], $target_file)) 

		


		

	$save1=mysql_query("INSERT INTO studformat (name,format,orgname,status,campus) VALUES ('$name','$picname','$org','','$campus')");

	
	 echo "<script type=\"text/javascript\">window.alert('Activity Request has been submitted.');window.location.href = 'upload.php';</script>"; 

?>