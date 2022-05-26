<?php

$array_first = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$getArrAVG = function(array $arr): int {
    $sumAllNumbers = 0;
    foreach($arr as $number) {
        $sumAllNumbers += $number;
    };
    return $sumAllNumbers / count($arr);
};

$getArrWithInfo = function(array $arr, Closure $funcAVG): array {
    $arrayInfo = [];
    $arrayInfo["max"] = max($arr);
    $arrayInfo["min"] = min($arr);
    $arrayInfo["avg"] = $funcAVG($arr);
    return $arrayInfo;
};

print_r ($getArrWithInfo($array_first, $getArrAVG));
