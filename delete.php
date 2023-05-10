<?php
$path = "tasks.json";
$data = $_POST["index"];
$decodeData = json_decode(file_get_contents($path), true);
array_splice($decodeData, $data, 1);
$encodedData = json_encode($decodeData);
file_put_contents($path, $encodedData);
header('Content-Type: application/json');
echo $encodedData;
