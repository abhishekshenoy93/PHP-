<?php
function sum_total() {
    $b = 0;
    for ($i = 1; $i <= 10; $i++)
    {
        $b += $i;
    }
    return $b;
}
echo sum_total();
?>