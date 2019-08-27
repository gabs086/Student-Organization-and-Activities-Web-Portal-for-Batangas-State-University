<?php  
include('../auth.php');
include('../connect.php');
$id=$_SESSION['SESS_MEMBER_ID'];
$result = mysql_query("SELECT * FROM login WHERE id='$id'");
while($row = mysql_fetch_array($result))
	{
		$username = $row['username'];
		$campus= $row['campus'];
	}
	
	?>
<?php include_once('functions.php'); ?>
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
				<div class="profile-usertitle-name">SOA Head - <?php echo $campus ?></div>
				
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			

			<li><a href="index.php"><em class="fa fa-calendar">&nbsp;</em> Calendar</a></li>
			<li><a href="ann.php"><em class="fa fa-users">&nbsp;</em> Organization List</a></li>	
			<li><a href="check.php"><em class="fa fa-check">&nbsp;</em>Activity Request</a></li>
			<li><a href="news.php"><em class="fa fa-bullhorn">&nbsp;</em> Announcements</a></li>
			<li  class="active"><a href="lost.php"><em class="fa fa-cubes">&nbsp;</em> Lost and Found</a></li>
			<li><a href="assess.php"><em class="fa fa-telegram">&nbsp;</em> Assessment</a></li>
			<li><a href="reports.php"><em class="fa fa-print">&nbsp;</em> Reports</a></li>
			<li><a href="../index.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="lost.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Lost & Found</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1>Lost and Found Reports</h1></div>
		</div><!--/.row-->
		
		<div class="panel panel-container" style="min-height:900px">
			<!-- start content -->
			<h3>Lost Reports</h3>
<table width="100%" border="1" style="border-collapse:collapse;font-size:15px;padding:5px;" class="tftable order-table table bluetext">
							<thead style="color:#FFF">
							<tr>
								<th><b><center>Name</th>
								<th><b><center>SR Code</th>
								<th><b><center>Year</th>
								<th><b><center>Campus</th>
								<th><b><center>Department</th>
								<th><b><center>Lost Item</th>
								<th><b><center>Contact</th>
								<th><b><center>Status</th>
								<th><b><center>Action</th>
								</tr>
							</thead>
							<tbody>
		
			<?php
include('../connect.php');
$result = mysql_query("SELECT * FROM lost WHERE campus = '$campus' ORDER BY ID DESC");
while($row = mysql_fetch_array($result))
{
	$status = $row['status'];
			echo '<tr>';
			echo '<td valign="top" style="color:#000" >&nbsp;'.$row['name'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$row['sr'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$row['year'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$row['campus'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$row['dept'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$row['details'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$row['contact'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$status.'</td>';
			if($status == 'Found') {
			echo '<td valign="top" style="color:#000">&nbsp; <a href="set.php?id='.$row["id"].'" style="color:#000">Set as Claimed</a> </td>';	
			} elseif ($status == 'Claimed') {
				echo '<td valign="top" style="color:#000">&nbsp; </td>';	
			} else {
				echo '<td valign="top" style="color:#000">&nbsp; <a href="set.php?id='.$row["id"].'" style="color:#000">Set as Claimed</a> | <a href="found.php?id='.$row["id"].'" style="color:#000">Item Found</a></td>';	
			}
			
			echo '</tr>';
}
?>
		
		</tbody>
							
						</table>	
			
			<!-- end content -->
<br><br>

<h3>When a Finder handsover a Found lost item, Record it here:</h3>

<form action="foundexec.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8" style="margin-left:15px">
									<div class="form-group">
									<label>Name of Finder:</label>
								
								   <input type="text" name="namefound" class="form-control" >
								  </div>

								  <div class="form-group">
									<label>Found Item:</label>
								
								   <input type="text" name="founditem" class="form-control" >
								  </div>
								  <label>Campus:</label>
								      <select class="form-control" name="campus" required>

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
                    
                  </select><br>

								  <div class="form-group">
									<label>Date:</label>
								
								   <input type="date" name="date" class="form-control" >
								  </div>
								  (Please Double Check what you input before clicking Record Button**)<br><br>
								<input type="submit" value="Record" name="submit" class="myButton">
								
</form>
<br><br>
<br>						<br>
							<input type="button" value="Show Records" onclick="document.getElementById('news1').style.display='block';document.getElementById('hide').style.display='block';document.getElementById('show').style.display='none';" id="show" class="myButton">
							<input type="button" value="Hide Records" onclick="document.getElementById('news1').style.display='none';document.getElementById('show').style.display='block';document.getElementById('hide').style.display='none';" id="hide" class="myButton" style="display:none">
							<br><br>
						<div id="news1" style="display:none">
<table width="100%" border="1" style="border-collapse:collapse;font-size:15px;padding:5px;" class="tftable order-table table bluetext">
							<thead style="color:#FFF">
							<tr>
								<th><b><center>Name of Finder</th>
								<th><b><center>Found Item</th>
									<th><b><center>Campus</th>
									<th><b><center>Date</th>
									<th><b><center>Action</th>
		</thead>
		<tbody>
			<?php
include('../connect.php');
$result = mysql_query("SELECT * FROM found ORDER BY ID DESC");
while($row = mysql_fetch_array($result))
{
			echo '<tr>';
			echo '<td valign="top" style="color:#000" >&nbsp;'.$row['namefound'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$row['founditem'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$row['campus'].'</td>';
			echo '<td valign="top" style="color:#000">&nbsp;'.$row['date'].'</td>';
			echo '<td valign="top"><font color="#000"><a href="deletefound.php?id='.$row['id'].'" onclick="return confirm(\'Are you sure you want to delete?\')" style="color:#000">Delete</a></td>';
            echo '</tr>';
	}		
?>
</tbody>
</table>
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