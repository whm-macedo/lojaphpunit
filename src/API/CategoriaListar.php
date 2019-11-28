<?php

namespace LOJA\API;

use LOJA\DAO\DAOCategoria;

class CategoriaListar{

    public $lista;

    function __construct(){        
        $obj = new DAOCategoria();
        $this->lista = $obj->listaCategoria();
    }
}
?>