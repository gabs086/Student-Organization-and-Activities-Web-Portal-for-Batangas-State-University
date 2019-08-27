<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Batangas State University</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<style>
	
.tftable {
	margin-left:15px;
	
	font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #1D1B1B;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#1D1B1B;border-width: 1px;padding: 8px;border-style: solid;border-color: #820101;text-align:left;}
.tftable tr {background-color:#FFF;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #820101;color:#FFF;}
.tftable a {text-decoration:none;color:#FFF;  }

.myButton {
	margin-left:15px;
	-moz-box-shadow:inset 0px 1px 0px 0px #1D1B1B;
	-webkit-box-shadow:inset 0px 1px 0px 0px #1D1B1B;
	box-shadow:inset 0px 1px 0px 0px #1D1B1B;
	background-color:#820101;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #124d77;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family: arial black;
	font-size:16px;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #820101;
}
.myButton:hover {
	background-color: #1D1B1B;
}
.myButton:active {
	position:relative;
	top:1px;
}
	
	</style>
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				

			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">SOA Assistant Director</div>
				
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
<li><a href="index.php"><em class="fa fa-calendar">&nbsp;</em> Calendar</a></li>				
			<li><a href="ann.php"><em class="fa fa-users">&nbsp;</em> Organization List</a></li>	
			<li class="active"><a href="news.php"><em class="fa fa-bullhorn">&nbsp;</em> Announcements</a></li>
			<li><a href="app.php"><em class="fa fa-thumbs-o-up"></em>&nbsp;<em class="fa fa-thumbs-o-down"></em> Requested Activities</a></li>
			<li><a href="up.php"><em class="fa fa-upload"> </em> Upload Format</a></li>
			<li><a href="reports.php"><em class="fa fa-print">&nbsp;</em> Reports</a></li>
			<li><a href="replace.php"><em class="fa fa-book">&nbsp;</em> ID Replacement</a></li>
				
			<li><a href="account.php"><em class="glyphicon glyphicon-cog"></em> Account Settings</a></li>
			<li><a href="../index.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="news.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">	Announcement</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1>Announce</h1></div>
		</div><!--/.row-->
		
		<div class="panel panel-container" style="min-height:500px">
			<!-- start content -->
			
						<br><br>
									<?php
include('../connect.php');
$id = $_GET['id'];
$result = mysql_query("SELECT * FROM announcement WHERE id = '$id' ORDER BY date DESC");
while($row = mysql_fetch_array($result))
{
	$category = $row['category'];
	$name = $row['name'];
	$date = $row['date'];
	$time = $row['time'];
	$venue = $row['venue'];
	$description = $row['description'];
}
?>
						 <form action="updateexec.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8" style="margin-left:15px">
						<input type="hidden" name="id"  value="<?php echo $id ?>">
									<div class="form-group">
									


									<label>Announcement:</label>
								
								<input type="text" name="name" required  class="form-control" value="<?php echo $name ?>">
<div class="form-group">
									<label>Date:</label>
								
								<input type="date" name="date" required  class="form-control"  value="<?php echo $date ?>">
								<div class="form-group">
									<label>Time:</label>
								<input type="time" name="time" required  class="form-control"  value="<?php echo $time ?>">
								<div class="form-group">
									<label>Venue:</label>
								
								<input type="text" name="venue" required  class="form-control"  value="<?php echo $venue ?>">
							
								<div class="form-group">
									<label>Description:</label>
								<textarea style="height:150px;width:350px" required name="description"   class="form-control" ><?php echo $description ?></textarea>
					<br>
					<br>(Please Double Check what you input before clicking Update Announcement**)<br><br>
								<input type="submit" value="Update Announcement" name="submit" class="myButton">
							
						
						</form>
						
		  				<center>
								<br>
								</center>
					
			<!-- end content -->
		</div>


		

	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>