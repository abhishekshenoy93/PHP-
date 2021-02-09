<?php

// defining todays date
$today_date = "2020-09-21";

//defining new date format
$new_date = date("d-m-Y", strtotime($today_date));

//print the new date
echo $new_date . "\n";

?>