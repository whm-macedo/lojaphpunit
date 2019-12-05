<?php
use PHPUnit\Framework\TestCase;
use LOJA\Model\Categoria;
use LOJA\DAO\DAOCategoria;

class DAOCategoriaTests extends TestCase{

    /**
     * @before
     */
    public function setUpDeleteAll(){
        $DAO = new DAOCategoria();
        $DAO->deleteAll();
    }

    public function testCadastro(){
        $categoria = new Categoria();
        //$categoria->setId();
        
        $categoria->setNome('Camisa');
       
        $DAO = new DAOCategoria();
        $msg = $DAO->cadastrarCategoria($categoria);
        $this->assertEquals($msg, "Cadastrado com Sucesso!");
    }
}