<?php

namespace LOJA\API;
    use LOJA\DAO\DAOCategoria;

class CategoriaVisualizar{
    public $dados;

    public function __construct(){
        try{
            $DAO = new DAOCategoria();
            $this->dados = $DAO->BuscarPorId($_GET['id']);
        }catch(\Exception $e){
            $this->dados = $e->getMessage();
        }

    }
}