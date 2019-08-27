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
	
..tftable {
	margin-left:15px;
	
	font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #820101;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#820101;border-width: 1px;padding: 8px;border-style: solid;border-color: #1D1B1B;text-align:left;}
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
	font-size:14px;
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

	fieldset {
	width:500px;
	border:5px dashed #CCCCCC;
	margin:0 auto;
	border-radius:5px;
}
 
legend {
	color: blue;
	font-size: 25px;
}
 
dl {
	
	
}
 
dt {
	width: 180px;
	color: brown;
	font-size: 19px;
}
 
dd {
	width:200px;
	float:left;
}
 
input {
	width: 200px;
	border: 2px dashed #DDD;
	font-size: 15px;
	text-indent: 5px;
	height: 28px;
}
 
.btn {
	color: #fff;
	background-color: dimgrey;
	height: 38px;
	border: 2px solid #CCC;
	border-radius: 10px;
	
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
			<li><a href="news.php"><em class="fa fa-bullhorn">&nbsp;</em> Announcements</a></li>
			<li><a href="app.php"><em class="fa fa-thumbs-o-up"></em>&nbsp;<em class="fa fa-thumbs-o-down"></em> Requested Activities</a></li>
			<li class="active"><a href="up.php"><em class="fa fa-upload"> </em> Upload Format</a></li>
			<li><a href="reports.php"><em class="fa fa-print">&nbsp;</em> Reports</a></li>
			<li><a href="replace.php"><em class="fa fa-book">&nbsp;</em> ID Replacement</a></li>
				
			<li><a href="account.php"><em class="glyphicon glyphicon-cog"></em> Account Settings</a></li>
			<li><a href="../index.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="up.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Upload Format and Downloadable Files</li>
			</ol>
		</div><!--/.row-->
		
		
		<div class="panel panel-container" style="min-height:500px">
			<!-- start content -->
<div class="row">
<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-1">
<div class="login-panel panel panel-default">	
<div class="panel-body">
      
      <h2>For University Student Organization</h2>

 <form action="formatexec.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8" style="margin-left:15px">
						
									<div class="form-group">
									
	<div class="form-group">
	<label>Format Name:</label>
	<input type="text" name="name" class="form-control">
	</div>						
	<div class="form-group">
	<label>Format File:</label>
	<input type="file" name="file_array" class="form-control">
	</div>(Please Double Check what you input before clicking Upload Format**)<br><br>
<input type="submit" value="Upload Format" name="submit" class="myButton">
							

</form>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-1">
<div class="login-panel panel panel-default">	
<div class="panel-body">
<h2>For University Students</h2>
 <form action="studformexec.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8" style="margin-left:15px">
						
									<div class="form-group">
									
	<div class="form-group">
	<label>Downloadable File Name:</label>
	<input type="text" name="name" class="form-control">
	</div>						
	<div class="form-group">
	<label>File to Upload:</label>
	<input type="file" name="file_array" class="form-control">
	</div>(Please Double Check what you input before clicking Upload File**)<br><br>
<input type="submit" value="Upload File" name="submit" class="myButton">
							

</form>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-1">
<div class="login-panel panel panel-default">	
<div class="panel-body">
<table width="100%" border="1" style="border-collapse:collapse;font-size:15px;padding:5px;" class="tftable order-table table bluetext">
			<thead>
				<th style="color:#FFF">Files Uploaded For University Student Organization</th>
			</thead>
			<tbody>
		 <?php
	  	include('../connect.php');
		$result = mysql_query("SELECT * FROM format ORDER BY ID DESC");
		while($row = mysql_fetch_array($result))
		{
		echo '<tr>';
      echo '<td><div class="fakeimg" style="margin-left:15px"> <a href="../format/'.$row["format"].'" download style="color:#000"><i class="fa fa-folder"></i>&nbsp;'.$row["name"].' </td></div>';
	  echo '</tr>';
		}
?>
</tbody>
      </thead>
</table>
  </div>
</div>
</div>


    

<div class="row">
<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-1">
<div class="login-panel panel panel-default">	
<div class="panel-body">
<table width="100%" border="1" style="border-collapse:collapse;font-size:15px;padding:5px;" class="tftable order-table table bluetext">
			<thead>
				<th style="color:#FFF">Files Uploaded For University Students</th>
			</thead>
			<tbody>
		 <?php
	  	include('../connect.php');
		$result = mysql_query("SELECT * FROM studform ORDER BY ID DESC");
		while($row = mysql_fetch_array($result))
		{
		echo '<tr>';
      echo '<td><div class="fakeimg" style="margin-left:15px"> <a href="../studentform/'.$row["format"].'" download style="color:#000"><i class="fa fa-folder"></i>&nbsp;'.$row["name"].' </td></div>';
	  echo '</tr>';
		}
?>
      </tbody>
	  </table>
	    </div>
</div>
</div>
</div>
</div>
</div>

	</div>
     


	</form>
	
			<!-- end content -->
		</div>


		
	<!--/.main-->
	
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