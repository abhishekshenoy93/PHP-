<?php
$a=5;
for($b=1; $b<=$a; $b++)
{
    for($c=1; $c<=$b; $c++)
    {
        echo ' * ';
    }
    echo '<br>';
}
for($b=$a; $b>=1; $b--)
{
    for($c=1; $c<=$b; $c++)
    {
        echo ' * ';
    }
    echo '<br> ';
}
?>