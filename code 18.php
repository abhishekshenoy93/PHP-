<?php

// defining birthday
$birth_day = mktime(0,0,0,8,05,2021);
$present = time();
// difference between birthday & present day
$diff_day = ($birth_day - $present);
$days = (int)($diff_day / 86400);

//printing the days till next birthday
print "Days till next birthday: $days days!" . "\n";

?>
