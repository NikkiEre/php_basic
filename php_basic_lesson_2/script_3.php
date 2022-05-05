<?php

$count = 1;
do {
    $number = readline('Введите число от 1 до 100 ');
} while((int)$number < 1 || (int)$number > 100);

while($count <= (int)$number) {
    if($count % 3 === 0) {
        if($count % 5 === 0) {
            echo "FizzBuzz \n";   
        } else {
            echo "Fizz \n";
        }
    } else if($count % 5 === 0) {
        echo "Buzz \n";
    } else {
        echo "$count \n";
    }
    $count++;
}



