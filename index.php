<?php

$entityBody = file_get_contents('php://input') . PHP_EOL;

$file = 'readings.txt';

if($_GET["clear"] = "clear") {
    file_put_contents($file, "");
    $_GET["clear"] = NULL
    $_GET = NULL; 
}

file_put_contents($file, $entityBody, FILE_APPEND | LOCK_EX);
?>
