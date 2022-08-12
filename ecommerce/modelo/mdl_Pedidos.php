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
        $query = "SELECT * FROM usuarios WHERE email = '%" . $email . "%'";
        $sql = $this->_Select($query, null, "1");
        return $sql;
    }

    function getCatProd()
    {
        $query = "SELECT * FROM categorias ORDER BY id ASC";
        $sql = $this->_Select($query, null, "1");
        return $sql;
    }
}
