<?php
namespace LOJA\API;
use LOJA\Model\Categoria;
use LOJA\DAO\DAOCategoria;

class CategoriaCadastrar{

    public $msg;

    function __construct(){
        if ($_POST) {
            try {
                $cadastrar = new Categoria();
                $cadastrar->setNome($_POST['nome']);

                $DAO = new DAOCategoria;
                $this->msg = $DAO->cadastrarCategoria($cadastrar);

            } catch (Exception $erro) {
                $this->msg = $erro->getMessage();
            }
        }
    }
}
?>