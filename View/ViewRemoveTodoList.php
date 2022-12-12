<?php
require_once("Helper/Input.php");
require_once("Controller/RemoveTodoList.php");

function viewRemoveTodoList() {
    echo "REMOVE TODO" . PHP_EOL;

    $select = input("Number ('x' cancel)");

    if ($select == "x") {
        echo "Cancel Remove Todo!" . PHP_EOL;
    } else {
        $success = removeTodoList($select);

        if ($success) {
            echo "Success to Remove Todo List Number = $select!" . PHP_EOL;
        } else {
            echo "Fail to Remove Todo List Number = $select!" . PHP_EOL;
        }
    }
}