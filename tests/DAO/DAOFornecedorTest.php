<?php
use PHPUnit\Framework\TestCase;
use LOJA\Model\Fornecedor;
use LOJA\DAO\DAOFornecedor;

class DAOFornecedorTests extends TestCase{

    // /**
    //  * @before
    //  */
    // public function setUpDeleteAll(){
    //     $DAO = new DAOFornecedor();
    //     $DAO->deleteAll();
    // }

    public function testCadastro(){
        $fornecedor = new Fornecedor();
        //$fornecedor->setId();
        
        $fornecedor->setNome('William');
        $fornecedor->setCidade('Rio de Janeiro');
        $fornecedor->setEstado('RJ');
        $fornecedor->setCnpj('12345968498');
       
        $DAO = new DAOFornecedor();
        $msg = $DAO->cadastrarFornecedor($fornecedor);
        $this->assertEquals($msg, "Cadastrado com Sucesso!");
    }
}