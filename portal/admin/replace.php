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
	
	font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #ebab3a;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#3f6077;border-width: 1px;padding: 8px;border-style: solid;border-color: #ebab3a;text-align:left;}
.tftable tr {background-color:#FFF;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #ebab3a;color:#FFF;}
.tftable a {text-decoration:none;color:#FFF;  }

.myButton {
	margin-left:15px;
	-moz-box-shadow:inset 0px 1px 0px 0px #54a3f7;
	-webkit-box-shadow:inset 0px 1px 0px 0px #54a3f7;
	box-shadow:inset 0px 1px 0px 0px #54a3f7;
	background-color:#007dc1;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #124d77;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #154682;
}
.myButton:hover {
	background-color:#0061a7;
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
				<div class="profile-usertitle-name">SOA Director</div>
				
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="index.php"><em class="fa fa-calendar">&nbsp;</em> Calendar</a></li>
			<li><a href="ann.php"><em class="fa fa-dashboard">&nbsp;</em> Organization List</a></li>	
			<li><a href="news.php"><em class="fa fa-bar-chart">&nbsp;</em> Announcements</a></li>
			
			<li><a href="reports.php"><em class="fa fa-print">&nbsp;</em> Reports</a></li>
			<li class="active"><a href="replace.php"><em class="fa fa-book">&nbsp;</em> ID Replacement</a></li>
			<li><a href="account.php"><em class="fa fa-clone">&nbsp;</em> Account Settings</a></li>
			<li><a href="../index.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">ID Replacement Record</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				
		</div><!--/.row-->
		
		<div class="panel panel-container" style="min-height:500px">
			<!-- start content -->
			<input type="button" value="View Recods"  class="myButton" onclick="window.location='record.php'">
			
			<br>
			<br>
			<form role="form" style="margin-left:15px" action="idreplace.php" method="POST">
								<div class="form-group">
									<label>Date of Report:</label>
									<input type="date" class="form-control" name="date" required>
								</div>
								<div class="form-group">
									<label>Student Name:</label>
									<input class="form-control" name="name" required>
								</div>
								<div class="form-group">
									<label>Year and Program:</label>
									<input class="form-control" name="year" required>
								</div>
								<div class="form-group">
									<label>SR Code:</label>
									<input class="form-control" name="sr" required>
								</div>
								<div class="form-group">
									<label>College Department:</label>
									<input class="form-control" name="dept" required>
								</div>
								<h5>ID Replacement Reason</h5>
								<div class="form-group">
									<label>Reason:</label>
									<select class="form-control" name="reason">
										<option></option>
										<option>New Student</option>
										<option>Transferee</option>
										<option>Shifter</option>
										<option>Lost ID</option>
									</select>
									
								</div>
								<div class="form-group">
									<label>Student Number:</label>
									<input class="form-control" name="idnumber" required>
								</div>
								<div class="form-group">
									<label>Number of Offense:</label>
									<select class="form-control" name="offense">
										<option></option>
										<option>1st</option>
										<option>2nd</option>
										<option>3rd</option>
										<option>More</option>
									</select>
								</div>
								<div class="form-group">
									<label>Other Information:</label>
									<input class="form-control" name="other" required>
								</div>
							<input type="submit" value="Add Record" name="submit" class="myButton">
							
							
			</form>
					<br>
					<br>
					<br>
			
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