<?php
use PHPUnit\Framework\TestCase;
use LOJA\Model\Categoria;
use LOJA\DAO\DAOCategoria;

class DAOCategoriaTests extends TestCase{

 

    public function testCadastro(){
        $categoria = new Categoria();
        //$categoria->setId();
        
        $categoria->setNome('Camisa');
       
        $DAO = new DAOCategoria();
        $msg = $DAO->cadastrarCategoria($categoria);
        $this->assertEquals($msg, "Cadastrado com Sucesso!");
    }
}