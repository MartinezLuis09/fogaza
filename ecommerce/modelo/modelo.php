<?php

include_once('_CRUD.php');
Class ClaseModulo extends CRUD {
    function nombreFuncion1 () {
        $query = "SELECT * FROM ASDASD";
        $sql = $this->_Select($query,null,"1");
        
        // se retorna consulta especifica
        // foreach($sql as $row);
        // Se valida el row 
        // if(!isset($row)){
        //     $row = 0;
        // }
        
        // se retorna consulta global
        return $sql;
    }

    function nombreFuncion2 ($array) {
        $query = "INSERT INTO ASDASD";
        $query = "UPDATE ASDASD SET";
        $this->_DIU($query,$array,"1");
    }
    
}
?>