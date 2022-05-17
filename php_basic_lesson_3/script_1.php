<?php

$array_first = [2, 4, 6, 8, 10, 12, 14, 16];
$array_second = [1, 3, 5, 7, 9, 11, 13, 15];

for ($i=0; $i < count($array_first); $i++) { 
  print_r($array_first[$i] * $array_second[$i] . "\n");
};
