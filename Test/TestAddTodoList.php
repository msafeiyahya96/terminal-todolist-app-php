<?php
require_once("Model/TodoList.php");
require_once("Controller/AddTodoList.php");

addTodoList("Learn PHP Basic");
addTodoList("Learn PHP OOP");
addTodoList("Learn PHP Database");

var_dump($todoList);