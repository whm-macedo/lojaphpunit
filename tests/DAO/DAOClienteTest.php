<?php
use PHPUnit\Framework\TestCase;
use LOJA\Model\Cliente;
use LOJA\DAO\DAOCliente;

class DAOClienteTests extends TestCase{

    /**
     * @before
     */
    public function setUpDeleteAll(){
        $DAO = new DAOCliente();
        $DAO->deleteAll();
    }

    public function testCadastro(){
        $c = new Cliente();
        //$c->setId();
        
        $c->setNome('Daniel');
        $c->setTelefone('(21)1234-2136');
        $c->setEmail('daniel@gmail.com');
        $c->setCpf('123.456.789-10');
        $c->setRua('lomas');
        $c->setComplemento('predio');
        $c->setCep('21514-369');
        $c->setUf('rj');
        $c->setBairro('Campo Grande');

        $DAO = new DAOCliente();
        $msg = $DAO->cadastrar($c);
        $this->assertEquals($msg, "Cadastrado com sucesso");
    }
}