<?php

$add = function (int $num_1, int $num_2): int {
    return $num_1 + $num_2;
};

$sub = function (int $num_1, int $num_2): int {
    return $num_1 - $num_2;
};

$multi = function (int $num_1, int $num_2): int {
    return $num_1 * $num_2;
};

$div = function (int $num_1, int $num_2): ?float {
    return ($num_2 !== 0) ?  $num_1 / $num_2 : null;
};

$mathOperation = function(int $x, int $y, &$operation): ?int {
    return $operation($x, $y);
};

print_r($mathOperation(4, 5, $add) . "\n");
print_r($mathOperation(55, 5, $add) . "\n");
print_r($mathOperation(100, 20, $sub) . "\n");
print_r($mathOperation(5, 1, $sub) . "\n");
print_r($mathOperation(7, 8, $multi) . "\n");
print_r($mathOperation(5, 5, $multi) . "\n");
print_r($mathOperation(33, 12, $div) . "\n");
print_r($mathOperation(55, 0, $div) . "\n");
