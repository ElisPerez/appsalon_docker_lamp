<?php

function obtener_servicios()
{
  try {
    // Importar las credenciales
    require 'database.php';

    // Consulta SQL
    $sql = "SELECT * FROM services;";

    // Realizar la consulta SQL
    $query = mysqli_query($db_connection, $sql);

    // Acceder a los resultados
    $data = mysqli_fetch_assoc($query);

    echo "<pre>";
    var_dump($data);
    echo "</pre>";

    // Cerrar la conexión (opcional ya que PHP cierra la conexiones sin uso automaticamente)
    // mysqli_close($db_connection);
  } catch (\Throwable $th) {
    var_dump($th);
  }
}

obtener_servicios();
