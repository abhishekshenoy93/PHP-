<?php

echo "<table border ='1' >";

//row
for ($a=1; $a <= 6; $a++)
{
    echo "<tr> \n";
//column
    for ($b=1; $b <= 6; $b++)

// row * column
    {
        $p = $a * $b;
        echo "<td>$p</td> \n";
    }
    echo "</tr>";
}
echo "</table>";
?>
