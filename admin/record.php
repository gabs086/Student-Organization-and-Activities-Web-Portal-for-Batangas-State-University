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
	

	* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
	

	
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
			<li><a href="up.php"><em class="fa fa-upload"> </em> Upload Format</a></li>
			<li><a href="reports.php"><em class="fa fa-print">&nbsp;</em> Reports</a></li>
			<li class="active"><a href="replace.php"><em class="fa fa-book">&nbsp;</em> ID Replacement</a></li>
				
			<li><a href="account.php"><em class="glyphicon glyphicon-cog"></em> Account Settings</a></li>
			<li><a href="../index.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="replace.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">ID Replacement Records</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				</div>
		</div><!--/.row-->
		
		<div class="panel panel-container" style="min-height:500px">



			<!-- start content -->


			<p align="right">



<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
</p>
			<br>
			<table class="tftable order-table table" id="data-table" border="1">
						<thead style="color:#FFF">
							<th>Date</th>
							<th>Name</th>
							<th>Year</th>
							<th>SR Number</th>
							<th>Campus</th>
							<th>Department</th>
							<th>Reason</th>
							<th>Student Number</th>
							<th>Counts</th>
							<th>Other Information</th>
							<th>Action	</th>
							
						</thead>
						<tbody>
							<?php
				
		include('../connect.php');
		$result = mysql_query("SELECT * FROM idreplace ORDER BY date DESC");
		while($row = mysql_fetch_array($result))
		{
			echo '<tr>';
			echo '<td valign="top"><font color="#000">'.$row['date'].'</td>';
			echo '<td valign="top"><font color="#000">'.$row['name'].'</td>';
			echo '<td valign="top"><font color="#000">'.$row['year'].'</td>';
			echo '<td valign="top"><font color="#000">'.$row['sr'].'</td>';
			echo '<td valign="top"><font color="#000">'.$row['campus'].'</td>';
			echo '<td valign="top"><font color="#000">'.$row['dept'].'</td>';
			echo '<td valign="top"><font color="#000">'.$row['reason'].'</td>';
			echo '<td valign="top"><font color="#000">'.$row['idnumber'].'</td>';
			echo '<td valign="top"><font color="#000">'.$row['offense'].'</td>';
			echo '<td valign="top"><font color="#000">'.$row['other'].'</td>';
			echo '<td valign="top"><font color="#000"><center ><a class="myButton" href="editid.php?id='.$row["id"].'">Edit</a></center></td>';
			echo '</tr>';
		}

				
				?>

				<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("data-table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
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