<?php

$date = " 1993-08-05 ";

$day_of_week = date(" d ", strtotime($date)) ;

$day_of_week_1 = date(" l ", strtotime($date)) ;


echo $day_of_week_1. " the " .$day_of_week;

?>
