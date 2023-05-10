<?php
$path = "tasks.json";
$data = $_POST["index"];
$decodeData = json_decode(file_get_contents($path), true);
if ($decodeData[$data]["done"] === "yes"){
    $decodeData[$data]["done"] = "no";
} else {
    $decodeData[$data]["done"] = "yes";
};
$encodedData = json_encode($decodeData);
file_put_contents($path, $encodedData);
header('Content-Type: application/json');
echo $encodedData;