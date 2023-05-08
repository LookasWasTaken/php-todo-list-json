<?php
  $path = "tasks.json";
  $tasksList = file_get_contents($path);
  // why json_decode does not working?
  echo $tasksList;
?>