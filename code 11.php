<?php

$color = array('Black','Green','White','Yellow','Indigo','Blue','Purple','Red');
    sort($color);

$a = count($color);
for($x = 0; $x < $a; $x++) {
    echo $color[$x];
    echo "<br>";
}
?>

