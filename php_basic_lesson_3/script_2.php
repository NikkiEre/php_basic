<?php

do {
    $name = readline('Как вас зовут? ');
} while (!$name);

$nouns = ["хорошего", "больше", "крепкого", "неиссякаемого", "отличного", "огромного"];
$adjectives = ["здоровья", "настроения", "удачи", "счастья", "везения", "улыбок"];
$final_arr = [];

foreach($nouns as $value) {
    $rand_key_adjectives = array_rand($adjectives);
    $final_arr[] = "$value $adjectives[$rand_key_adjectives]";
    array_splice($adjectives, $rand_key_adjectives, 1);
};

print_r("$name, " . implode(", ", $final_arr));

