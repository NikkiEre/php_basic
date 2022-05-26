<?php

include "user.php";
include "task.php";
include "comment.php";
include "task-service.php";

$user_1 = new User("Bob", "bob@email.com", "male", 22);

// print_r($user_1);

$task_1 = new Task($user_1, "This is task 1");

// print_r($task_1);

TaskService::addComment($user_1, $task_1, "Oh my first task");

print_r($task_1);
