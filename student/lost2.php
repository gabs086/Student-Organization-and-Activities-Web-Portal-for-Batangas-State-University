
<?php include_once('functions.php'); ?>
<?php  
include('../auth.php');
include('../connect.php');
$id=$_SESSION['SESS_MEMBER_ID'];
$result = mysql_query("SELECT * FROM login WHERE id='$id'");
while($row = mysql_fetch_array($result))
	{
		$username = $row['username'];
	}
	
	$result2 = mysql_query("SELECT * FROM org WHERE username='$username'");
while($row2 = mysql_fetch_array($result2))
	{
		$name = $row2["name"];
		$head = $row2["head"];
		$description = $row2["description"];
		
	}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>LOST</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

<style>
* {
    box-sizing: border-box;
}

/* Style the body */
body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
}

/* Header/logo Title */
.header {
    padding: 80px;
    text-align: center;
    background: maroon;
    color: white;
}

/* Increase the font size of the heading */
.header h1 {
    font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
    overflow: hidden;
    background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
    float: right;
}

/* Change color on hover */
.navbar a:hover {
    background-color: #ddd;
    color: black;
}




/* Column container */
.row {  
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
    -ms-flex: 30%; /* IE10 */
    flex: 30%;
    background-color: #f1f1f1;
    padding: 30px;
}

/* Main column */
.main {   
    -ms-flex: 70%; /* IE10 */
    flex: 70%;
    background-color:  #aaa;
    padding: 30px;
}

/* Fake image, just for this example */
.fakeimg {
    background-color: white;
    width: 100%;
    padding: 20px;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
    .row {   
        flex-direction: column;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
    .navbar a {
        float: none;
        width: 100%;
    }
}

.btn {
    background-color: maroon;
    border: none;
    color: white;
    padding: 12px 16px;
    font-size: 16px;
    cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
    background-color: gray;
}


.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}

table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid gray;
}


div.a {
    text-decoration-line: underline;
    text-decoration-style: solid;
}


.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #ebab3a;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#3f6077;border-width: 1px;padding: 8px;border-style: solid;border-color: #ebab3a;text-align:left;}
.tftable tr {background-color:#FFF;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #ebab3a;color:#FFF;}
.tftable a {text-decoration:none;color:#FFF;  }
</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="header">
 <div class="a"> <h1>Batangas State University</h1>
</div>
</div>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="lost.php">Lost & Found</a>
  <a href="trans.php">Transparency</a>
  <a href="calendar.php">Calendar</a>
  <a href="request.php">Request New ID</a>
  <a href="../index.php" class="right">Logout</a>
</div>
<div class="w3-container">

<div class="row">
  <div class="side">
      <h2> File Report </h2>
      <div class="fakeimg" style="height:550px;">
 <form action="lostexec.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8" style="margin-left:15px">
								<div class="form-group">
								<input type="hidden" name="orgname" value="Student" required  class="form-control" >
								<input type="hidden" name="username"  value="<?php echo $username ?>" required  class="form-control" >
								<label>Name:</label>
								<input type="text" name="name" required  class="form-control" >
								</div>
								<div class="form-group">
								<label>SR Code:</label>
								<input type="text" name="sr" required  class="form-control" >
								</div>
								<div class="form-group">
								<label>Year:</label>
								<input type="text" name="year" required  class="form-control" >
								</div>
								<div class="form-group">
								<label>Campus:</label>
								<input type="text" name="campus" required  class="form-control" >
								</div>
								<div class="form-group">
								<label>Department:</label>
								<input type="text" name="dept" required  class="form-control" >
								</div>
								<div class="form-group">
								<label>Lost Item Details:</label>
								<input type="text" name="details" required  class="form-control" >
								</div>
								<div class="form-group">
								<label>Contact Details:</label>
								<input type="number" name="contact" required  class="form-control" >
								</div>
								
								<div class="form-group">
									
								
								<input type="submit" name="submit" class="myButton" >
								</div>
							</form>	
    </p></i>
   </div>
     

    
     
     
     
      <div class="fakeimg" style="height:250px;"><p align="center" style="font-family: arial;"><i>
      
   </p></i>
   </div>
     



    
  </div>
  <div class="main">
      <h1>Reports</h1>
      <div class="fakeimg" style="height:200px;">
        
 
						<table width="100%" border="1" style="border-collapse:collapse;font-size:15px;padding:5px;" class="tftable order-table table bluetext">
							<thead style="color:#000">
							<tr>
								<th style="color:#FFF"><b><center>Name</th>
								<th style="color:#FFF"><b><center>SR Code</th>
								<th style="color:#FFF"><b><center>Year</th>
								<th style="color:#FFF"><b><center>Campus</th>
								<th style="color:#FFF"><b><center>Department</th>
								<th style="color:#FFF"><b><center>Lost Item</th>
								<th style="color:#FFF"><b><center>Contact</th>
								<th style="color:#FFF"><b><center>Status</th>
								</tr>
							</thead>
							<tbody>
		
			<?php
include('../connect.php');
$result = mysql_query("SELECT * FROM lost ORDER BY ID DESC");
while($row = mysql_fetch_array($result))
{
			echo '<tr>';
			echo '<td valign="top" style="color:#000" >&nbsp;'.$row['name'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$row['sr'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$row['year'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$row['campus'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$row['dept'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$row['details'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$row['contact'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$row['status'].'</td>';
			echo '</tr>';
}
?>
		
		</tbody>
							
						</table>


      </div>
      
      <br>
     
      
   
  </div>
</div>

<div class="footer">
  <h2></h2>
</div>

</body>
</html>
