
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
	}
	?>
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
.tftable th {font-size:12px;background-color:#820101;border-width: 1px;padding: 8px;border-style: solid;border-color: #1D1B1B;text-align:left;}
.tftable tr {background-color:#FFF;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #1D1B1B;color:#FFF;}
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
#calender_section{ width:700px; margin:30px auto 0;}
#calender_section h2{ background-color:#efefef; color:#444444; font-size:17px; text-align:center; line-height:40px;}
#calender_section h2 a{ color:#F58220; float:none;}
#calender_section_top{ width:100%; float:left; margin-top:20px;color:#000}
#calender_section_top ul{padding:0; list-style-type:none;color:#000}
#calender_section_top ul li{ float:left; display:block; width:99px; border-right:1px solid #fff;  text-align:center; font-size:14px; min-height:0; background:none; box-shadow:none; margin:0; padding:0;color:#000}
#calender_section_bot{ width:100%; margin-top:20px; float:left; border-left:1px solid #ccc; border-bottom:1px solid #ccc;color:#000}
#calender_section_bot ul{ margin:0; padding:0; list-style-type:none;color:#000}
#calender_section_bot ul li span{ margin-top:7px; float:left; margin-left:7px; text-align:center;color:#000}
#calender_section_bot ul li{ float:left; width:99px; height:80px; text-align:center; border-top:1px solid #ccc; border-right:1px solid #ccc; min-height:0; background:none; box-shadow:none; margin:0; padding:0; position:relative;color:#000}

.grey{ background-color:#DDDDDD !important;}
.light_sky{ background-color:#B9FFFF !important;}

/*========== Hover Popup ===============*/
.date_cell { cursor: pointer; cursor: hand; }
.date_cell:hover { background: #DDDDDD !important; }
.date_popup_wrap {
	position: absolute;
	width: 143px;
	height: 115px;
	z-index: 9999;
	top: -115px;
	left:-55px;
	background: transparent url(add-new-event.png) no-repeat top left;
	color: #666 !important;
}
.events_window {
	overflow: hidden;
	overflow-y: auto;
	width: 133px;
	height: 115px;
	margin-top: 28px;
	margin-left: 25px;
}
.event_wrap {
	margin-bottom: 10px; padding-bottom: 10px;
	border-bottom: solid 1px #E4E4E7;
	font-size: 12px;
	padding: 3px;
}
.date_window {
	margin-top:20px;
	margin-bottom: 2px;
	padding: 5px;
	font-size: 16px;
	margin-left:9px;
	margin-right:14px
}
.popup_event {
	margin-bottom: 2px;
	padding: 2px;
	
	width:100%;
}
.popup_event a {color: #000000 !important;}
.packeg_box a {color: #F58220;float: right;}
a:hover {color: #181919;text-decoration: underline;}

@media only screen and (min-width:480px) and (max-width:767px) {
#calender_section{ width:336px;}
#calender_section_top ul li{ width:47px;}
#calender_section_bot ul li{ width:47px;}
}
@media only screen and (min-width: 320px) and (max-width: 479px) {
#calender_section{ width:219px;}
#calender_section_top ul li{ width:30px; font-size:11px;}
#calender_section_bot ul li{ width:30px;}
#calender_section_bot{ width:217px;}
#calender_section_bot ul li{ height:50px;}
}

@media only screen and (min-width: 768px) and (max-width: 1023px) {
#calender_section{ width:530px;}
#calender_section_top ul li{ width:74px;}
#calender_section_bot ul li{ width:74px;}
#calender_section_bot{ width:525px;}
#calender_section_bot ul li{ height:50px;}
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
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="background-color: #820101">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button><img style='margin-left:10px;height:60px;vertical-align:middle' src="bannernew2.png">
				

			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $name ?></div>
				
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="index.php"><em class="fa fa-calendar">&nbsp;</em> Calendar</a></li>
			
			<li><a href="format.php"><em class="fa fa-file-text-o">&nbsp;</em>Formats</a>

			<li><a href="upload.php"><em class="fa fa-upload">&nbsp;</em>Activity Request</a>
					
			<li  class="active"><a href="reports.php"><em class="	fa fa-archive ">&nbsp;</em> Reports</a></li>
<?php
include('../connect.php');
$resultn = mysql_query("SELECT * FROM notification WHERE username='$name' and status = ''");
$count=mysql_num_rows($resultn);
?>		
			<li><a href="notification.php"><em class="	fa fa-user">&nbsp;</em> Notifications [<?php echo $count ?>]</a></li>
			<li><a href="assess.php"><em class="fa fa-telegram">&nbsp;</em> Assessment</a></li>
		
			<li><a href="../index.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="reports.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Reports</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				
		</div><!--/.row-->
		
		<div class="panel panel-container" style="min-height:900px">
			<!-- start content -->
			<form action="reportexec.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8" style="margin-left:15px">
								<div class="form-group">
									<label>Report Name:</label>
								
								<input type="hidden" name="orgname" value="<?php echo $name ?>" required  class="form-control" >
								<input type="hidden" name="username"  value="<?php echo $username ?>" required  class="form-control" >
								<input type="text" name="name" required  class="form-control" >
								</div>
								<div class="form-group">
									<label>Report Description:</label>
								<textarea style="height:150px"class="form-control" name="description">
								</textarea>
								</div>
								<div class="form-group">
									<label>File:</label>
								
								<input type="file" name="pic" required  class="form-control" >
								</div>
								<div class="form-group">
										<div class="form-group">
									<label>Campus (What Campus are you):</label>
									<select class="form-control" name="campus">
									<option></option>
					<option>BatStateU Pablo Borbon Main I</option>
<option>BatStateU Pablo Borbon Main II</option>
<option>BatStateU JPLPC-Malvar</option>
<option>BatStateU ARASOF-Nasugbu</option>
<option>BatStateU Lipa</option>
<option>BatStateU Rosario</option>
<option>BatStateU San Juan</option>
<option>BatStateU Lemery</option>
<option>BatStateU Balayan</option>
<option>BatStateU Lobo</option>
										
									</select>
								</div>
								(Please Double Check what you input before clicking Submit**)<br><br>
								<input type="submit" name="submit" class="myButton" >
								</div>
							</form>	
							<h3>Report Lists</h3>		
								
						
						<table width="100%" border="1" style="border-collapse:collapse;font-size:15px;padding:5px;" class="tftable order-table table bluetext">
							<thead style="color:#FFF">
							<tr>
								<th><b><center>Name</th>
								<th><b><center>Description</th>
									
								<th><b><center>Action</th>
								</tr>
							</thead>
							<tbody>
		
			<?php
include('../connect.php');
$result = mysql_query("SELECT * FROM reports  ORDER BY name DESC");
while($row = mysql_fetch_array($result))
{
			echo '<tr>';
			echo '<td valign="top" style="color:#000" >&nbsp;'.$row['name'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$row['description'].'</td>';
			echo '<td width="35%" style="color:#000"><center><a href="../reports/'.$row["file"].'" style="color:#000" download>View File</a> | <a href="delete2.php?id='.$row['id'].'" onclick="return confirm(\'Are you sure you want to delete this record? Press OK to continue\')"  style="color:#000">Delete File</a></td>';
			echo '</tr>';
}
?>
		
		</tbody>
							
						</table>
			
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