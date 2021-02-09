<?php
// Define range
$a = range(14, 86);

//shuffle function to range
shuffle($a);

for ($b = 0; $b < 5; $b++) {
    echo $a[$b] . ' ';
}
echo "<br>"

?>