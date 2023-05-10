<?php
$path = "tasks.json";
$data = $_POST;
$encodedData = json_encode($data);
file_put_contents($path, $encodedData);
header('Content-Type: application/json');
echo $encodedData;
