<?php

$primes = array();
$prime_no = false;
for ($i = 2; $i < 100; $i++)
{
    $prime_no = true;

    // For checking prime numbers
    for ($j = 2; $j <= ($i / 2); $j++)
    {
        if ($i % $j == 0)

        {
            $prime_no = false;

            break;

        }
    }
    if ($prime_no)

    {
        array_push($primes, $i);
    }

    if (count($primes) == 100)
    {
        break;
    }
}
echo array_sum($primes) . "\n";
?>