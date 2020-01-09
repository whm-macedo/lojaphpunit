<?php
use PHPUnit\Framework\TestCase;
use LOJA\Model\Categoria;
use LOJA\DAO\DAOCategoria;

class DAOCategoriaTests extends TestCase{

 

    public function testCadastro(){
        $categoria = new Categoria();
        //$categoria->setId();
        
        $categoria->setNome('Camisa');
       
        // Cria uma nova Categoria para teste e atribui a $categoria
        $DAO = new DAOCategoria();
        $msg = $DAO->cadastrarCategoria($categoria);
        $this->assertEquals($msg,"Cadastrado com Sucesso!");

        //$this->categoria->setPk_categoria($DAO->lastId);


    }
}