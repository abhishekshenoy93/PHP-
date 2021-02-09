<?php
$colors = array(
    0 => 'Red',
    1 => 'Green',
    2 => 'White',
    3 => 'Black',
    4 => 'Red',
    );

$numbers = array(
    0 => 100,
    1 => 200,
    2 => 100,
    3 => -10,
    4 => -10,
    5 => 0,
);


// defining function for removing duplicates

function remove_duplicated_values($a){
    $newarray = array();
    foreach($a as $key=>$val){
        $newarray[$val] = 1;
    }
    return array_keys($newarray);
}

// recall the function
$colors = remove_duplicated_values($colors);
$numbers = remove_duplicated_values($numbers);

//printing the new array after removing dupluicates
echo '<pre>'.print_r($colors,true).'</pre>';

echo '<pre>'.print_r($numbers,true).'</pre>';
