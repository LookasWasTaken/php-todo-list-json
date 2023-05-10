<?php
$path = "tasks.json";
$decodeData = [];
$encodedData = json_encode($decodeData);
file_put_contents($path, $encodedData);
header('Content-Type: application/json');
echo $encodedData;
