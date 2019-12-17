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

class PedidoCastrarTest extends TestCase{
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
        $this->produto = new Produto();
        $this->produto->setNome('Televisão');
        $this->produto->setPreco(20.00);
        $this->produto->setImagem('camisa.jpg');
        $this->produto->setCategoria($this->categoria);

        $DAO2 = new DAOProduto();
        $result = $DAO2->cadastrar($this->produto);
        $this->produto->setPk_produto($DAO2->lastId);

        // Cria um novo Cliente
        $this->cliente = new Cliente();
        $this->cliente->setNome('Daniel');
        $this->cliente->setTelefone('(21)1234-2136');
        $this->cliente->setEmail('daniel@gmail.com');
        $this->cliente->setCpf('058.612.387-31');
        $this->cliente->setRua('lomas');
        $this->cliente->setComplemento('predio');
        $this->cliente->setCep('21514-369');
        $this->cliente->setUf('rj');
        $this->cliente->setBairro('Campo Grande');

        $DAO3 = new DAOCliente(); 
        $result = $DAO3->cadastrar($this->cliente);
        $this->cliente->setPk_cliente($DAO3->lastId);

        $this->carrinho = new Carrinho();
        $this->carrinho->addItem($this->produto->getPk_produto());
    }
    public function testCadastro(){  // testa o cadastro do produto
        
        $_SESSION['clienteid'] = $this->cliente->getPk_cliente(); //isere um id ja existente
        $_SESSION['clientenome'] = $this->cliente->getNome();
        $_SESSION['carrinho'] = $this->carrinho;

        $obj = new \LOJA\API\PedidoCadastrar;

        $this->assertEquals($obj->msg, "Pedido efetuado com sucesso");
    }

}
