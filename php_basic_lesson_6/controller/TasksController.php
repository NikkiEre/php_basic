<?php

include_once 'task.php';

if(!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
} 

if(isset($_POST['task_form']) && !empty($_POST['task_form'])) {
    $newTask = new Task($_SESSION['username'], $_POST['task_form']);
    $_SESSION['tasks'][] = $newTask;
}

$tasks = $_SESSION['tasks'];

// print_r($tasks);

include_once('view/tasks.php');