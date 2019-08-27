<!DOCTYPE html>
<html lang="en">
<head>
<title>TRANSPARENCY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    padding: 20px;
}

/* Main column */
.main {   
    -ms-flex: 70%; /* IE10 */
    flex: 70%;
    background-color: #aaa;
    padding: 20px;
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



/* Slideshow container */
.slideshow-container {
  max-width: 600px;
  max-height:100%;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
  margin-left:50px;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}


div.a {
    text-decoration-line: underline;
    text-decoration-style: solid;
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
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #ebab3a;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#3f6077;border-width: 1px;padding: 8px;border-style: solid;border-color: #ebab3a;text-align:left;}
.tftable tr {background-color:#FFF;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #ebab3a;color:#FFF;}
.tftable a {text-decoration:none;color:#FFF;  }
</style>
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

<div class="row">
  <div class="side">
        <h5>BatStateU VISION </h5>
      <div class="fakeimg" style="height:250px;"><p align="center" style="font-family: arial;"><i>
     A globally-recognized instittution of higher learning that develops competent and morally upright citizens who are acive participants in nation building and responsive to the challenges of the  21st century.</p></i>
   </div>
     

     <h5>BatStateU MISSION </h5>
      <div class="fakeimg" style="height:500px;"><p align="center" style="font-family: arial;"><i>
    Batangas State University is committed to the holistic development of productive citizens by providing a conducive learning environment for the generation, dissemination and utilization of knowledge through innovative education, multidiscipinary research collaborations, and community partnerships that would nurture the spirit of nationhood and help fuel national economy for sustainable development.</p></i>
   </div>
     
      <h5>BatStateU QUALITY POLICY </h5>
      <div class="fakeimg" style="height:250px;"><p align="center" style="font-family: arial;"><i>
     Batangas State Unviversity is committed to continous improvement of its services to all customers to meet the challenges of a world class educational institution.
     </p></i>
   </div>
     
      <h5>BatStateU CORE VALUES </h5>
      <div class="fakeimg" style="height:250px;"><p align="center" style="font-family: arial;"><i>
       Faith<br>
     Patriotism<br>
     Human Dignity<br>
     Integrity<br>
     Mutual Respect<br>
     Excellence
   </p></i>
   </div>
     
    
  </div>
  <div class="main">
   <table class="tftable">
   <thead>
   
        <th><h2 style="color:#FFF">BatStateU Organization Reports</h2></th>
		</thead>
		<tbody>
		
           <?php
	  	include('../connect.php');
		$result = mysql_query("SELECT * FROM reports WHERE status  = 'Approved' ORDER BY ID DESC");
		while($row = mysql_fetch_array($result))
		{
			echo '<tr>';
			echo '<td>';
      echo '<div class="fakeimg" style="height:50px;"> <a href="../reports/'.$row["file"].'" ><button class="btn"><i class="fa fa-folder"></i> '.$row["name"].'</button> </a></div><br>';
			echo '</td>';
			echo '</tr>';
		}
?>
      </table>
  </div>
</div>

<div class="footer">
  <h2></h2>
</div>

</body>
</html>
