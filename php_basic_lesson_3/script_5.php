<?php

$final_arr = [];

do {
    $random_int = rand(1, 200);
    if (!in_array($random_int, $final_arr)) {
        $final_arr[] = $random_int;
    };
} while (count($final_arr) <= 100);

print_r($final_arr);

