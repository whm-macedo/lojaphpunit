<?php
use PHPUnit\Framework\TestCase;
use LOJA\Model\Pedido;
use LOJA\Model\Produto;
use LOJA\Model\Categoria;
use LOJA\Model\Cliente;
use LOJA\Model\Carrinho;
use LOJA\Model\Item;
use LOJA\DAO\DAOPedido;
use LOJA\DAO\DAOProduto;
use LOJA\DAO\DAOCategoria;
use LOJA\DAO\DAOCliente;

class DAOPedidoTests extends TestCase{
    public $categoria;  // dados da categoria
    public $cliente;    //  dados do cliente
    public $carrinho;   // dados do carrinho
    public $produto;   // dados do produto

    /**
     * @before
     */    
    public function setUpInit(){ // Será executado primeiro
        // Cria uma nova categoria
        $this->categoria = new Categoria();
        $this->categoria->setNome("Eletrônicos");

        // Cria uma nova Categoria para teste e atribui a $categoria
        $DAO = new DAOCategoria();
        $DAO->cadastrarCategoria($this->categoria);
        $this->categoria->setPk_categoria($DAO->lastId);

        // Cria um novo produto
        $produto = new Produto();
        $produto->setNome('Televisão');
        $produto->setPreco(2600);
        $produto->setImagem('camisa.jpg');
        $produto->setCategoria($this->categoria);

        $DAO2 = new DAOProduto();
        $result = $DAO2->cadastrar($this->produto);
        $this->produto->setPk_produto($DAO2->lastId);

        // Cria um novo Cliente
        $this->cliente = new Cliente();
        $this->cliente->setNome('Daniel');
        $this->cliente->setTelefone('(21)1234-2136');
        $this->cliente->setEmail('daniel@gmail.com');
        $this->cliente->setCpf('123.456.789-10');
        $this->cliente->setRua('lomas');
        $this->cliente->setComplemento('predio');
        $this->cliente->setCep('21514-369');
        $this->cliente->setUf('rj');
        $this->cliente->setBairro('Campo Grande');

        $DAO3 = new DAOCliente(); 
        $result = $DAO3->cadastrar($this->cliente);
        $this->cliente->setId($DAO3->lastId);

        $this->carrinho = new Carrinho();
        $this->carrinho->addItem($this->produto->getId());
    }
    public function testCadastro(){  // testa o cadastro do produto
        $obj = new Pedido();
        $obj->setData('2019-15-25');
        $obj->setFrete(20.00);
        $obj->setDias(5);
        $obj->setCliente($this->cliente);

        $DAO = new DAOPedido();
        $msg = $DAO->cadastrar($obj, $this->carrinho);

        $this->assertEquals($msg, "Pedido efetuado com sucesso");
    }

}

