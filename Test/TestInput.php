<?php
require_once("Helper/Input.php");

$name   = input("Name");
echo "Hello $name" . PHP_EOL;

$stack  = input("Stack");
echo $stack . PHP_EOL;