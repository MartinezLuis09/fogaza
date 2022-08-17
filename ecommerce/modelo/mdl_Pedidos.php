<?php
include_once('_CRUD.php');

class Pedidos extends CRUD
{
    function fechaActual()
    {
        $query = "SELECT DATE_FORMAT(NOW(),'%d/%m/%Y') ";
        $sql = $this->_Select($query, null, "1");
        foreach ($sql as $row);
        return  $row[0];
    }

    function ultimoFolioPedido()
    {
        $query = "SELECT MAX(idPedido) AS id FROM pedidos";
        $sql = $this->_Select($query, null, "1");
        foreach ($sql as $row);
        return  $row[0];
    }

    function consutarInformacionCliente($email)
    {
        $query = "SELECT * FROM usuarios WHERE email = '" . $email . "'";
        $sql = $this->_Select($query, null, "1");
        return $sql;
    }

    function mostrarCategoriaProdudctos()
    {
        $query = "SELECT * FROM categorias ORDER BY id ASC";
        $sql = $this->_Select($query, null, "1");
        return $sql;
    }

    function mostrarProductosFiltrados($id_categoria)
    {
        $query = "SELECT * FROM productos WHERE id_categoria = '" . $id_categoria . "' ";
        $sql = $this->_Select($query, null, "1");
        return $sql;
    }

    function mostrarInformacionProducto($id)
    {
        $query = "SELECT * FROM productos WHERE id = '" . $id . "' ";
        $sql = $this->_Select($query, null, "1");
        return $sql;
    }
}
