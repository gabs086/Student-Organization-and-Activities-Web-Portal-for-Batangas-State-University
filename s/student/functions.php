<?php
if(isset($_POST['func']) && !empty($_POST['func'])){
	switch($_POST['func']){
		case 'getCalender':
			getCalender($_POST['year'],$_POST['month']);
			break;
		case 'getEvents':
			getEvents($_POST['date']);
			break;
		case 'addEvent':
			addEvent($_POST['date'],$_POST['title']);
			break;
		default:
			break;
	}
}
function getCalender($year = '',$month = '')
{
	$dateYear = ($year != '')?$year:date("Y");
	$dateMonth = ($month != '')?$month:date("m");
	$date = $dateYear.'-'.$dateMonth.'-01';
	$currentMonthFirstDay = date("N",strtotime($date));
	$totalDaysOfMonth = cal_days_in_month(CAL_GREGORIAN,$dateMonth,$dateYear);
	$totalDaysOfMonthDisplay = ($currentMonthFirstDay == 7)?($totalDaysOfMonth):($totalDaysOfMonth + $currentMonthFirstDay);
	$boxDisplay = ($totalDaysOfMonthDisplay <= 35)?35:42;
	if($dateMonth == '01') {
		$mm = 'January '.$dateYear  ;
	}
	if($dateMonth == '02') {
		$mm = 'February '.$dateYear  ;
	}
	if($dateMonth == '03') {
		$mm = 'March '.$dateYear  ;
	}
	if($dateMonth == '04') {
		$mm = 'April '.$dateYear  ;
	}
	if($dateMonth == '05') {
		$mm = 'May '.$dateYear  ;
	}
	if($dateMonth == '06') {
		$mm = 'June '.$dateYear  ;
	}
	if($dateMonth == '07') {
		$mm = 'July '.$dateYear  ;
	}
	if($dateMonth == '08') {
		$mm = 'August '.$dateYear  ;
	}
	if($dateMonth == '09') {
		$mm = 'September '.$dateYear  ;
	}
	if($dateMonth == '10') {
		$mm = 'October '.$dateYear  ;
	}
	if($dateMonth == '11') {
		$mm = 'November '.$dateYear  ;
	}
	if($dateMonth == '12') {
		$mm = 'December '.$dateYear  ;
	}
?>
	<div id="calender_section">
		<table width="100%" border="0">
	<tr>
		<td width="30%"><h2><a href="javascript:void(0);" onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($date.' - 1 Month')); ?>','<?php echo date("m",strtotime($date.' - 1 Month')); ?>');" style="font-size:14px;color:#000">Previous Month</a></td>
		
		<td width="30%" align="right"><h2><a href="javascript:void(0);" onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($date.' + 1 Month')); ?>','<?php echo date("m",strtotime($date.' + 1 Month')); ?>');"  style="font-size:14px;color:#000">Next Month</a></td>
	</tr>
</table>
<h3><?php echo $mm ?></h3>
<div id="event_list" class="none"></div>
        <div id="calender_section_top">
			<ul>
				<li>Sun</li>
				<li>Mon</li>
				<li>Tue</li>
				<li>Wed</li>
				<li>Thu</li>
				<li>Fri</li>
				<li>Sat</li>
			</ul>
		</div>
		<div id="calender_section_bot">
			<ul>
			<?php 
				$dayCount = 1; 
				for($cb=1;$cb<=$boxDisplay;$cb++){
					if(($cb >= $currentMonthFirstDay+1 || $currentMonthFirstDay == 7) && $cb <= ($totalDaysOfMonthDisplay)){
						$currentDate = $dateYear.'-'.$dateMonth.'-'.$dayCount;
						$eventNum = 0;
						include '../dbConfig.php';
						$result = $db->query("SELECT * FROM activities WHERE date = '".$currentDate."' AND status = 'Approved'");
						$eventNum = $result->num_rows;
						if(strtotime($currentDate) == strtotime(date("Y-m-d"))){
							echo '<li date="'.$currentDate.'" class="grey date_cell">';
						}elseif($eventNum > 0){
							echo '<li date="'.$currentDate.'" class="light_sky date_cell">';
						}else{
							echo '<li date="'.$currentDate.'" class="date_cell">';
						}
						echo '<span>';
						echo $dayCount;
						echo '</span>';
						echo '<div id="date_popup_'.$currentDate.'" class="date_popup_wrap none">';
						echo '<div class="date_window">';
						echo '<div class="popup_event">EVENTS ('.$eventNum.')</div>';
						echo ($eventNum > 0)?'<a href="javascript:;" onclick="getEvents(\''.$currentDate.'\');">View Events</a><br/>':'';
						
						echo '</div></div>';
						echo '</li>';
						$dayCount++;
			?>
			<?php }else{ ?>
				<li><span>&nbsp;</span></li>
			<?php } } ?>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		function getCalendar(target_div,year,month){
			$.ajax({
				type:'POST',
				url:'functions.php',
				data:'func=getCalender&year='+year+'&month='+month,
				success:function(html){
					$('#'+target_div).html(html);
				}
			});
		}
		
		function getEvents(date){
			$.ajax({
				type:'POST',
				url:'functions.php',
				data:'func=getEvents&date='+date,
				success:function(html){
					$('#event_list').html(html);
					$('#event_add').slideUp('slow');
					$('#event_list').slideDown('slow');
				}
			});
		}
		function addEvent(date){
			$('#eventDate').val(date);
			$('#eventDateView').html(date);
			$('#event_list').slideUp('slow');
			$('#event_add').slideDown('slow');
		}
		$(document).ready(function(){
			$('#addEventBtn').on('click',function(){
				var date = $('#eventDate').val();
				var title = $('#eventTitle').val();
				$.ajax({
					type:'POST',
					url:'functions.php',
					data:'func=addEvent&date='+date+'&title='+title,
					success:function(msg){
						if(msg == 'ok'){
							var dateSplit = date.split("-");
							$('#eventTitle').val('');
							alert('Event Created Successfully.');
							getCalendar('calendar_div',dateSplit[0],dateSplit[1]);
						}else{
							alert('Some problem occurred, please try again.');
						}
					}
				});
			});
		});
		$(document).ready(function(){
			$('.date_cell').mouseenter(function(){
				date = $(this).attr('date');
				$(".date_popup_wrap").fadeOut();
				$("#date_popup_"+date).fadeIn();	
			});
			$('.date_cell').mouseleave(function(){
				$(".date_popup_wrap").fadeOut();		
			});
			$('.month_dropdown').on('change',function(){
				getCalendar('calendar_div',$('.year_dropdown').val(),$('.month_dropdown').val());
				$.ajax({
				type:'POST',
				url:'functions.php',
				data:'func=getEvents&date='+date,
				success:function(html){
					$('#event_list').html(html);
					$('#event_add').slideUp('slow');
					$('#event_list').slideDown('slow');
				}
			});
			});
			$('.year_dropdown').on('change',function(){
				getCalendar('calendar_div',$('.year_dropdown').val(),$('.month_dropdown').val());
			});
			$(document).click(function(){
				$('#event_list').slideUp('slow');
			});
		});
	</script>
<?php
}
function getAllMonths($selected = ''){
	$options = '';
	for($i=1;$i<=12;$i++)
	{
		$value = ($i < 01)?'0'.$i:$i;
		$selectedOpt = ($value == $selected)?'selected':'';
		$options .= '<option value="'.$value.'" '.$selectedOpt.' >'.date("F", mktime(0, 0, 0, $i+1, 0, 0)).'</option>';
	}
	return $options;
}
function getYearList($selected = ''){
	$options = '';
	for($i=2015;$i<=2025;$i++)
	{
		$selectedOpt = ($i == $selected)?'selected':'';
		$options .= '<option value="'.$i.'" '.$selectedOpt.' >'.$i.'</option>';
	}
	return $options;
}
function getEvents($date = ''){
	include '../dbConfig.php';
	$eventListHTML = '';
	$date = $date?$date:date("Y-m-d");
	$result = $db->query("SELECT * FROM announcement WHERE date = '".$date."'");
	if($result->num_rows > 0){
		$eventListHTML = '<h2>Events On '.date("l, d M Y",strtotime($date)).'</h2>';
		
		while($row = $result->fetch_assoc()){ 
            $eventListHTML .= '<font color="#000"><b>Event Name:</b> '.$row['name'].'<br>';
            $eventListHTML .= '<b>Time:</b> '.$row['time'].'<br>';
            $eventListHTML .= '<b>Venue:</b> '.$row['venue'].'<br>';
            $eventListHTML .= '<b>Description:</b> '.$row['description'].'<br>';
            $eventListHTML .= '<center><img src="uploads/'.$row['pic'].'" width="60%"></center>';
        }
		
	}
	echo $eventListHTML;
}
function addEvent($date,$title){
	include '../dbConfig.php';
	$currentDate = date("Y-m-d H:i:s");
	$insert = $db->query("INSERT INTO events (title,date,created,modified) VALUES ('".$title."','".$date."','".$currentDate."','".$currentDate."')");
	if($insert){
		echo 'ok';
	}else{
		echo 'err';
	}
}
?>