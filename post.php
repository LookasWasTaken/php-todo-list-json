<?php
$path = "tasks.json";
$data = $_POST["task"];
$decodeData = json_decode(file_get_contents($path), true);
array_push($decodeData, [
    "task" => $data,
    "done" => "no"
]);
$encodedData = json_encode($decodeData);
file_put_contents($path, $encodedData);
header('Content-Type: application/json');
echo $encodedData;
