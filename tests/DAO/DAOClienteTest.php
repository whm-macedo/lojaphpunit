<?php
use PHPUnit\Framework\TestCase;
use LOJA\Model\Cliente;
use LOJA\DAO\DAOCliente;

class DAOClienteTests extends TestCase{

    // /**
    //  * @before
    //  */
    // public function setUpDeleteAll(){
    //     $DAO = new DAOCliente();
    //     $DAO->deleteAll();
    // }

    public function testCadastro(){
        $c = new Cliente();
        //$c->setId();
        

        //Ordem dos testes
        //Dados
        $c->setNome('Daniel');
        $c->setTelefone('(21)1234-2136');
        $c->setEmail('daniel@gmail.com');
        $c->setCpf('123.456.789-10');
        $c->setRua('lomas');
        $c->setComplemento('predio');
        $c->setCep('21514-369');
        $c->setUf('rj');
        $c->setBairro('Campo Grande');
        
        //Execução
        $DAO = new DAOCliente();
        $result = $DAO->cadastrar($c);
        
        //Testa Resultados
        $this->assertEquals($result, "Cadastrado com sucesso");

        // Remove os dados gerados (opcional) para deixar o banco organizado
        // $DAO->deleteFromId($DAO->lastId);
    }
}