<?php
namespace LOJA\API;
use LOJA\DAO\DAOProduto;

class ProdutoListarHome{
    public $lista;

    function __construct(){
        $obj = new DAOProduto();
        $this->lista = $obj->listaProduto10();
    }
}
?>