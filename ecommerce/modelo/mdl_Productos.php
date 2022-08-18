<?php
include_once('_CRUD.php');

Class Producto extends CRUD {
    function mostrarProductos () {
        $query = "SELECT * FROM productos ORDER BY id_categoria  ASC";
        $sql = $this->_Select($query,null,"1");
        return $sql;
    }

    function mostrarProductosCategoria($idCategoria) {
        $query = "SELECT * FROM productos WHERE id_categoria = '" . $idCategoria . "'";
        $sql = $this->_Select($query,null,"1");
        return $sql;
      } 
      
    function getCategoriasProductos()
    {
        $query = "SELECT * FROM categorias ORDER BY id ASC";
        $sql = $this->_Select($query, null, "1");
        return $sql;
    }

    function mostrarProductosIndividualmente($idProducto) {
        $query = "SELECT * FROM productos WHERE id = '" . $idProducto . "'";
        $sql = $this->_Select($query,null,"1");
        return $sql;
      } 
}
?>