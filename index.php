<?php
// if (!empty($_GET['readings'])) {
//     $fp = fopen('readings.txt', 'a');
//     fwrite($fp, $_GET['readings'] . PHP_EOL);   
//     fclose($fp);  
// }

$entityBody = file_get_contents('php://input');

$file = 'readings.txt';


file_put_contents($file, $entityBody . PHP_EOL, FILE_APPEND | LOCK_EX);