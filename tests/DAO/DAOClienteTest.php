<?php
use PHPUnit\Framework\TestCase;
use LOJA\Model\Cliente;
use LOJA\DAO\DAOCliente;

class DAOClienteTests extends TestCase{
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
    public function deleteAll(){
        $sql = "delete from cliente";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();
        return "Excluído Todos com sucesso";
    }
}