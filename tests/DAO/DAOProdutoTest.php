<?php
use PHPUnit\Framework\TestCase;
use LOJA\Model\Produto;
use LOJA\Model\Categoria;
use LOJA\DAO\DAOProduto;

class DAOCategoriaTests extends TestCase{

    /**
     * @before
     */
    public function setUpDeleteAll(){
        $DAO = new DAOProduto();
        $DAO->deleteAll();
    }

    public function testCadastro(){
        $produto = new Produto();
        //$produto->setId();
        
        $produto->setNome('Camisa');
        $produto->setPreco('25.00');
        $produto->setCategoria('teste');
        $produto->setImagem('camisa.jpg');

        $categoria = new Categoria();
        $categoria->setPk_categoria(79);
        $produto->setCategoria($categoria);


        $DAO = new DAOProduto();
        $msg = $DAO->cadastrar($produto);
        $this->assertEquals($msg, "PRODUTO SALVO COM SUCESSO");
    }
}