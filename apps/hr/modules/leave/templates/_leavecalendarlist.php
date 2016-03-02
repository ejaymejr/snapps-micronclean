<div class="calendarTitle">
	<?php echo DateUtils::DUFormat('F Y', $cdate ) ?>
</div>
<table border="1" class="calendarTable">
	<tr>
		<th>Sun</th>
		<th>Mon</th>
		<th>Tue</th>
		<th>Wed</th>
		<th>Thu</th>
		<th>Fri</th>
		<th>Sat</th>
	</tr>
	<?php 
	$wk = getweeks($cdate);
	$start = DateUtils::DUFormat('w', $cdate) + 1;
	$day = 1;
	$boxpos = 0;
	$currentDate = $cdate;
	for ($x=0; $x<$wk; $x++) :
	?>
	<tr>
		<?php 
			for ($y=1; $y<=7; $y++) :
				$boxpos = ($day >  DateUtils::DUFormat('t', $cdate) ) ? 0 : $boxpos + 1;
				
		?>
		<td>
		<span class="date">
			<?php 
				if ($boxpos < $start && $y == 1) :
					echo HrEmployeeLeavePeer::GetLeaveLegend();
				endif;
				if ($boxpos >= $start) :
					$currentDate = DateUtils::AddDate($cdate, $day - 1 );
					echo $day++;
				endif;
			 ?> 
		</span>
		<?php 
				if (! isset($company)) :
					$company ='';
				endif;
				$empList = HrEmployeeLeavePeer::GetEmployeeListPerDay($currentDate, $company);
				if ($boxpos >= $start) :
					$cClass = "";
					$cnt = 0;
					foreach($empList as $name => $leave):
						$cnt ++;
						$cClass = HrEmployeeLeavePeer::GetLeaveLegendColor($leave);
						$tooltip = '<span class="tooltip">
    									<span class="top"></span>
										<span class="middle">
    									Name: '. $name.' <br> 
										Leave Type: '. $leave .'
										</span>
										<span class="bottom"></span>
									</span>';
						echo '<div class="calendarNames "><div class="leaveLegend '.$cClass.'"></div>&nbsp;<a class="tt" href="#">'.substr($name, 0, 20) . $tooltip .'</a></div>';
					endforeach;
				endif;
		?>
		</td>
		<?php endfor; ?>
	</tr>
	<?php endfor; ?>
</table>

<?php 
function getweeks($cdate){
	$stdt = date("Y-m-d", mktime(0, 0, 0, substr($cdate, 5, 2), 1, substr($cdate, 0, 4)));
	$endt = date("Y-m-d", mktime(0, 0, 0, substr($cdate, 5, 2), DateUtils::DUFormat('t', $stdt), substr($cdate, 0, 4)));
	$stpos = Date('W',strtotime($stdt));
	$enpos = Date('W',strtotime($endt));
	return $enpos - $stpos + 1 ;
}
?>