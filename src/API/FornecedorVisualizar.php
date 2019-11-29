<?php
namespace LOJA\API;
use LOJA\DAO\DAOFornecedor;

class FornecedorVisualizar{
    public $dado;

    public function __construct() {
        
        if ($_GET['id']) {
            try {
                        
                $DAO = new DAOFornecedor();
                $this->dado = $DAO->buscarPorId($_GET['id']);
       
            } catch (Exception $e) {
                $this->dado = $e->getMessage();
            }
        }
    }
}
?>