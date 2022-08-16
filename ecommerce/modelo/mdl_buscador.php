<?php
include_once('_CRUD.php');

Class Busqueda extends CRUD {

  // Aquí recibimos el array, el crud se encarga de hacer el recorrido, para procesar la informacion
  function mostrarProductosBuscador($coincidencia) {
    $query = "SELECT * FROM productos WHERE titulo LIKE '%".$coincidencia."%'";//Y concatenamos directamente la variable
    $sql = $this->_Select($query,null,"1"); //Agregar un null xq no existe ningun array
    return $sql;
  } 
}
?>