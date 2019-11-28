<?php
namespace LOJA\API;
use LOJA\Model\Fornecedor;
use LOJA\DAO\DAOFornecedor;

class FornecedorCadastrar{
    public $msg;
    public function __construct() {
            
        if ($_POST) {
            try {
                $cadastrar = new Fornecedor();
                $cadastrar->setNome($_POST['nome']);
                $cadastrar->setCidade($_POST['cidade']);
                $cadastrar->setEstado($_POST['estado']);
                $cadastrar->setCnpj($_POST['cnpj']);
                
                $DAO = new DAOFornecedor;
                $this->msg = $DAO->cadastrarFornecedor($cadastrar);

            } catch (Exception $e) {
                $this->msg = $e->getMessage();
            }
        }
    }
}
?>