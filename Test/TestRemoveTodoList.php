<?php
require_once("Model/TodoList.php");
require_once("Controller/AddTodoList.php");
require_once("Controller/ShowTodoList.php");
require_once("Controller/RemoveTodoList.php");

addTodoList("Learn HTML");
addTodoList("Learn CSS");
addTodoList("Learn JavaScript");
addTodoList("Learn PHP");
addTodoList("Learn SQL");
addTodoList("Learn NoSQL");
showTodoList();

removeTodoList(4);
showTodoList();

removeTodoList(5);
showTodoList();

$process = removeTodoList(5);
var_dump($process);
showTodoList();