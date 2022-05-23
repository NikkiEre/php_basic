<?php

$array_first = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

/*
function getEvenOrOdd(int $number) : string
{
  return ($number % 2 === 0) ? "even" : "odd";
}

Если записываю функцию так, то в консоле получаю warning

PHP Warning:  Use of undefined constant getEvenOrOdd - assumed 'getEvenOrOdd' (this will throw an Error in a future version of PHP)
Use of undefined constant getEvenOrOdd - assumed 'getEvenOrOdd' (this will throw an Error in a future version of PHP)
*/

$getEvenOrOdd = function(int $number) : string {
  return ($number % 2 === 0) ? "even" : "odd";
};

$new_array = array_map($getEvenOrOdd, $array_first);

print_r($new_array);
