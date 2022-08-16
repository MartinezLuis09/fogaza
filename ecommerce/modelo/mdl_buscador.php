<?php
include_once('_CRUD.php');

Class Busqueda extends CRUD {

  // Aquí recibimos el array, el crud se encarga de hacer el recorrido, para procesar la informacion
  function mostrarProductosBuscador($coincidencia) {
    $query = "SELECT * FROM productos WHERE titulo LIKE '%".$coincidencia."%'";//Y concatenamos directamente la variable
    $sql = $this->_Select($query,null,"1"); //Agregar un null xq no existe ningun array
    return $sql;
  } 

  function getFechaAntigua()
  {
      $query = "SELECT * FROM productos WHERE fecha BETWEEN '20220106 00:00:00' AND '2022-05-06 00:00:00'";
      $sql = $this->_Select($query, null, "1");
      return $sql;
  }
    
}
?>