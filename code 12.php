<?php
$temp_month = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

$temp_array = explode(',' , $temp_month);

$total_temp = 0;

$temp_array_length = count($temp_array);

foreach($temp_array as $temp)
{
    $total_temp += $temp;
}

// Average Temperature
$avg_high_temp = $total_temp/$temp_array_length;
echo "Average Temperature is : ".$avg_high_temp."
";

sort($temp_array);

// 5 Lowest Temperature
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{
    echo $temp_array[$i].", ";
}
// 5 Highest Temperature
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
    echo $temp_array[$i].", ";
}
?>
