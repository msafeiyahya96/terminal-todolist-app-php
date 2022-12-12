<?php
require_once("Model/TodoList.php");
require_once("Controller/ShowTodoList.php");
require_once("Helper/Input.php");
require_once("View/ViewAddTodoList.php");
require_once("View/ViewRemoveTodoList.php");

function viewShowTodoList() {
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Add Todo" . PHP_EOL;
        echo "2. Remove Todo" . PHP_EOL;
        echo "x. exit" . PHP_EOL;

        $select = input("Select a Menu");

        if ($select == "1") {
            viewAddTodoList();
        } else if ($select == "2") {
            viewRemoveTodoList();
        } else if ($select == "x") {
            break;
        } else {
            echo "The Options are Not Clear." . PHP_EOL;
        }
    }

    echo "See You Again!" . PHP_EOL;
}