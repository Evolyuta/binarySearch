<?php

function binarySearch($filename, $key)
{
    //write line by line into $lines
    $lines = file($filename);

    //make keys and values arrays
    $keys = [];
    $values = [];
    foreach ($lines as $line) {
        $line = preg_split('/\s+/', $line);
        array_push($keys, $line[0]);
        array_push($values, $line[1]);
    }

    //binary algorithm
    $low = 0;
    $high = count($keys) - 1;

    while ($low <= $high) {

        $middle = floor(($low + $high) / 2);

        if ($keys[$middle] == $key) {
            return $values[$middle];
        }

        if ($key < $keys[$middle]) {
            $high = $middle - 1;
        } else {
            $low = $middle + 1;
        }
    }

    return "undef";

}
