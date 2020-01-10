<?php
namespace LOJA\API;

use LOJA\DAO\DAOProduto;

class ProdutoBuscar{
    public $produto; 
    

    public function __construct(){
        if ($_GET['id']) {
            try {
                $DAO = new DAOProduto();
                $this->produto = $DAO->buscarPorNome($_GET['id']);
                
            }catch (\Exception $e) {
                $msg = $e->getMessage();
            }
        }
    }
}
?>