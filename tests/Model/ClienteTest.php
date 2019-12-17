<?php 
use PHPUnit\Framework\TestCase; // importar o PHPUnit
use LOJA\Model\Cliente; // Configuração do nome LOJA no autoload, composer.json

class ClienteTest extends TestCase{
    public function testClass(){
        $c = new Cliente();
        $c->setNome('Daniel');
        $c->setTelefone('(21)1231-2132');
        $c->setEmail('daniel@email.com');        
        $c->setCpf('123.456.789');

        $this->assertEquals($c->getNome(), 'Daniel');
        $this->assertEquals($c->getTelefone(), '(21)1231-2132');
        $this->assertEquals($c->getEmail(), 'daniel@email.com');  
        $this->assertEquals($c->getCpf(), '123.456.789');       
    }
    public function testErrorEmail(){
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('E-mail Inválido');
        
        $c = new Cliente();
        $c->setEmail('danielemail.com');
    }
    public function testErrorNome(){
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Nome Inválido');
        
        $c = new Cliente();
        $c->setNome("");
    }/*
    public function testErrorCpf(){
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('CPF Inválido');
        
        $d = new Cliente();
        $d->setCpf("058.612.387.31");
    }*/
}

//regras
//arquivos terminando com Teste
//metodos comecando com teste 
