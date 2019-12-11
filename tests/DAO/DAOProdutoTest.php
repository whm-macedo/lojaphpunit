<?php
use PHPUnit\Framework\TestCase;
use LOJA\Model\Produto;
use LOJA\Model\Categoria;
use LOJA\DAO\DAOProduto;

class DAOProdutoTests extends TestCase{

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
        $produto->setImagem('camisa.jpg');
        $produto->setCategoria('teste');
        

        $categoria = new Categoria();
        $categoria->setPk_categoria(81); // id da categoria no banco de dados
        $produto->setCategoria($categoria);


        $DAO = new DAOProduto();
        $msg = $DAO->cadastrar($produto);
        $this->assertEquals($msg, "PRODUTO SALVO COM SUCESSO");
    }
}