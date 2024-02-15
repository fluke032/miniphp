<?php
 
	$strStartDate = "2024-08-01";
	$strEndDate = "2024-08-30";
	
	$intWorkDay = 0;
	$intHoliday = 0;
	$intTotalDay = ((strtotime($strEndDate) - strtotime($strStartDate))/  ( 60 * 60 * 24 )) + 1; 

	while (strtotime($strStartDate) <= strtotime($strEndDate)) {
		
		$DayOfWeek = date("w", strtotime($strStartDate));
		if($DayOfWeek == 0 or $DayOfWeek ==6)  // 0 = Sunday, 6 = Saturday;
		{
			$intHoliday++;
			echo "$strStartDate = <font color=red>วันหยุด</font><br>";
		}
		else
		{
			$intWorkDay++;
			echo "$strStartDate = <b>วันทำงาน</b><br>";
		}
		//$DayOfWeek = date("l", strtotime($strStartDate)); // return Sunday, Monday,Tuesday....

		$strStartDate = date ("Y-m-d", strtotime("+1 day", strtotime($strStartDate)));
	}

	echo "<hr>";
	echo "<br>วันหยุดทั้งหมด = $intTotalDay";
	echo "<br>วันทำงาน = $intWorkDay";
	echo "<br>วันหยุด = $intHoliday";
?>