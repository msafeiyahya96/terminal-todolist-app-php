<?php
require_once("Controller/AddTodoList.php");
require_once("View/ViewShowTodoList.php");

addTodoList("Learn HTML");
addTodoList("Learn CSS");
addTodoList("Learn Javascript");
addTodoList("Learn PHP");

viewShowTodoList();