<?php

// mysqli_connect('localhost', 'root', 'test', 'db_appsalon'); // el HOST es 'db' en docker
$db_connection = mysqli_connect('db', 'root', 'test', 'db_appsalon');

if (!$db_connection) {
  echo "Hubo un error";
  exit;
}

// echo "<pre>";
// var_dump($db_connection);
// echo "</pre>";