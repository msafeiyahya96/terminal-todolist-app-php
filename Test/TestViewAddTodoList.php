<?php
require_once("View/ViewAddTodoList.php");
require_once("Controller/AddTodoList.php");
require_once("Controller/ShowTodoList.php");

addTodoList("Learn HTML");
addTodoList("Learn CSS");
addTodoList("Learn Javascritp");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();