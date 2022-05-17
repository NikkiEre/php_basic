<?php

$name = readline('Как вас зовут? ');
$count_todos;
$plan;

do {
    $count_todos = (int)readline("Сколько задач на сегодня?");
} while(!$count_todos);

for ($i=1; $i <= $count_todos; $i++) { 
    do {
        $todo = readline("Какая задача номер $i стоит перед вами сегодня? ");   
    } while (!$todo);

    do {
        $time = readline('Сколько это займет времени? ');
    } while (!$time);

    if($i === 1) {
        $plan = "$name, сегодня у вас запланировано $count_todos задач на день: \n
        - $todo ($time ч)\n";
    } else {
        $plan .= "- $todo ($time ч)\n";
    }   
}

echo $plan;
