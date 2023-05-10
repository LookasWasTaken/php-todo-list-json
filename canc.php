<?php
$path = "tasks.json";
$new_path = "completed.json";
$decodeData = json_decode(file_get_contents($path), true);
$filteredData = array_filter($decodeData, function($array){
    return $array["done"] === "no";
}
);
$removedData = array_filter($decodeData, function($array){
    return $array["done"] === "yes";
});
$encodedData = json_encode($filteredData);
file_put_contents($path, $encodedData);
$encodedNewData = json_encode($removedData);
file_put_contents($new_path, $encodedNewData);
header('Content-Type: application/json');
echo $encodedData;
