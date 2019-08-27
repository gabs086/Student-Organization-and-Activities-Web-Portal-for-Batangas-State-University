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
  width: 45%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  margin-left: 20px;
}

	* {
  box-sizing: border-box;
}

#myInput2 {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 45%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  margin-left: 20px;
}
	
.tftable {
	margin-left:5px;
	
	font-size:12px;color:#333333;width:99%;border-width: 1px;border-color: black;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#820101;border-width: 1px;padding: 8px;border-style: solid;border-color: black;text-align:left;}
.tftable tr {background-color:#FFF;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: black;color:#FFF;}
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
<body >
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
			<li class="active"><a href="ann.php"><em class="fa fa-users">&nbsp;</em> Organization List</a></li>	
			<li><a href="news.php"><em class="fa fa-bullhorn">&nbsp;</em> Announcements</a></li>
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
				<li><a href="ann.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Organization List</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				</div>
		</div><!--/.row-->
		
		<div class="panel panel-container" style="min-height:10000px">
			<!-- start content -->
			<br>
	<input type="button" value="Add Student Organization" onclick="window.location='add.php'" class="myButton">
			<br>
			<br>
				<p>

									<select class="form-control" name="campus" required id="myInput" onchange="myFunction()" style="height:50px">
									<option>Search Campus..</option>
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

<input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search Department.." title="Type in a name">

</p>
			<table class="tftable order-table table" id="data-table" border="1">
						<thead style="color:#FFF">
							<th><center>Campus</th>
							<th><center>Department</th>
							<th><center>Organization Description   </th>
							<th><center>Organization Name    </th>
							<th><center>Organization President    </th>
							<th><center>Organization Adviser    </th>	
							<th><center>No. of Members  </th>
							<th><center>No. of Officers   </th>
							<th><center>Date of Registering    </th>
							<th><center>Action</th>
						</thead>
						<tbody>
							<?php
				
		include('../connect.php');
		$result = mysql_query("SELECT * FROM orga ORDER BY description ASC");
		while($row = mysql_fetch_array($result))
		{
			echo '<tr>';
			echo '<td valign="top"><font color="#000">'.$row['campus'].'</td>';
			echo '<td valign="top"><font color="#000">'.$row['department'].'</td>';
			echo '<td valign="top"><font color="#000">'.$row['description'].'</td>';
			echo '<td valign="top"><font color="#000">'.$row['orgname'].'</td>';
			echo '<td valign="top"><font color="#000">'.$row['orgpres'].'</td>';
			echo '<td valign="top"><font color="#000">'.$row['orgad'].'</td>';
			echo '<td valign="top"><font color="#000">'.$row['members'].'</td>';
			echo '<td valign="top"><font color="#000">'.$row['officers'].'</td>';
			echo '<td valign="top"><font color="#000">'.$row['date'].'</td>';

			echo '<td valign="top"><font color="#000"><center><a href="update.php?id='.$row['id'].'" style="color:#000">Update</a> 
			<br>
			<a href="delete2.php?id='.$row['id'].'" onclick="return confirm(\'Are you sure you want to delete this student organization?\')" style="color:#000">Delete</a></td>';
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
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


myFunction();
</script>

				<script>
function myFunction2() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput2");
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
