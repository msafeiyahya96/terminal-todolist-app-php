<?php

function showTodoList() {
    global $todoList;

    echo "TODO LIST" . PHP_EOL;

    foreach ($todoList as $number => $todo) {
        echo "$number. $todo" . PHP_EOL;
    }
}