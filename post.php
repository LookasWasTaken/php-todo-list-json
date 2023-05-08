<?php
  $path = "tasks.json";
  $data = $_POST;
  $encodedData = json_encode($data);
  header('Content-Type: application/json');
  echo $encodedData;
  file_put_contents($path, $encodedData);