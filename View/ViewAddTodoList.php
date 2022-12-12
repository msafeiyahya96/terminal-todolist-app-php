<?php
require_once("Model/TodoList.php");
require_once("Helper/Input.php");
require_once("Controller/AddTodoList.php");

function viewAddTodoList() {
    echo "ADD TODO" . PHP_EOL;

    $todo = input("Todo ('x' exit)");

    if ($todo == "x") {
        echo "Cancel Add Todo!" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}