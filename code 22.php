<?php
$Italian_time = setlocale(LC_TIME, 'it_IT');
echo  strftime("Today is %a on %b %d, %Y in Italy")."\n";
setlocale(LC_TIME, $Italian_time);

$American_time = setlocale(LC_TIME, 'en_US');
echo  strftime("Today is %a on %b %d, %Y in America_EST")."\n";
setlocale(LC_TIME, $American_time);
?>