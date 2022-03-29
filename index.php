<?php

$entityBody = file_get_contents('php://input');

$file = 'readings.txt';

if(isset($_GET["clear"])) {
    file_put_contents($file, "");
    $_GET["clear"] = NULL
}

file_put_contents($file, $entityBody . PHP_EOL, FILE_APPEND | LOCK_EX);

?>
