<?php

$task_string = file_get_contents('./todolist.json');


$task_list = json_decode($task_string, true);

$new_list_item = isset($_POST['task']) ? $_POST['task'] : null;

if ($new_list_item !== null) {
  $task_list[] = $new_list_item;
}

$new_task_string = json_encode($task_list);
file_put_contents('./todolist.json', $new_task_string);


header('Content-Type: application/json');

echo $new_task_string;