<?php
namespace LOJA\API;

use LOJA\DAO\DAOProduto;

class ProdutoBuscar{
    public $produto; 
    

    public function __construct(){
        if ($_POST['nome']) {
            try {
                $DAO = new DAOProduto();
                $this->produto = $DAO->buscarPorNome($_POST['nome']);
                
            }catch (\Exception $e) {
                $msg = $e->getMessage();
            }
        }
    }
}
?>