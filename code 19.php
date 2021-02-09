<?php

// defining start & end date
$startdate = "1993-08-05";
$enddate = "2020-08-05";

// difference of start & end date
$date_difference = abs(strtotime($enddate) - strtotime($startdate));

// finding years, months,days while multiplying & dividing by time
$years = floor($date_difference / (365 * 60 * 60 * 24));
$months = floor(($date_difference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
$days = floor(($date_difference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

// printing the year,months,days
printf("%d years, %d months, %d days", $years, $months, $days);
printf("\n");

?>