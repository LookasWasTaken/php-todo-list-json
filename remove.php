<?php
$path = "tasks.json";
$new_path = "completed.json";
$decodeData = json_decode(file_get_contents($path), true);
$emptyData = json_encode([]);
$encodedData = json_encode($decodeData);
file_put_contents($path, $emptyData);
file_put_contents($new_path, $encodedData);
header('Content-Type: application/json');
echo $emptyData;
