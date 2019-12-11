<?php
use PHPUnit\Framework\TestCase;
use LOJA\Model\Categoria;
use LOJA\Model\Produto;
use LOJA\DAO\DAOCategoria;
use LOJA\DAO\DAOProduto;

class DAOProdutoTests extends TestCase{

    public $categoria; // dados da categoria
    /**
     * @before
     */
    public function setUpInit()// sera executado primeiro
    {
        // Cria uma nova categoria
        $this->categoria = new Categoria();
        $this->categoria->setNome('Eletrônicos');
        // Cadastra uma nova categoria para teste e atribui a $categoria

        $DAO = new DAOCategoria();
        $DAO->cadastrarCategoria($this->categoria);
        $this->categoria->setPk_categoria($DAO->lastId);

    }


    public function testCadastro(){ // testa o cadastro de produtos
        // Definindo produto para teste

        $produto = new Produto();
        //$produto->setId();
        $produto->setNome('Camisa');
        $produto->setPreco(25.00);
        $produto->setImagem('camisa.jpg');
        $produto->setCategoria($this->categoria);
        
       
        // Executando Cadastro
        $DAO = new DAOProduto();
        // Verificando se o cadastro foi efetuado com sucesso
        $result = $DAO->cadastrar($produto);

        //Deletando a categoria e o cliente
        $this->assertEquals($result, "PRODUTO SALVO COM SUCESSO");

        // Deletando a categoria e o cliente
        $DAO->deleteFromId($DAO->lastId);
        $DAO = NEW DAOCategoria();
        $DAO->deleteFromId($this->categoria->getPk_categoria());

    }
}