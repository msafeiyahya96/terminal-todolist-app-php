<?php
require_once("Model/TodoList.php");
require_once("View/ViewRemoveTodoList.php");
require_once("Controller/AddTodoList.php");
require_once("Controller/ShowTodoList.php");

addTodoList("Learn HTML");
addTodoList("Learn CSS");
addTodoList("Learn Javascript");
showTodoList();

viewRemoveTodoList();
showTodoList();