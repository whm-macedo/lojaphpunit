<?php
use PHPUnit\Framework\TestCase;
use LOJA\Model\Usuario;
use LOJA\DAO\DAOUsuario;

class DAOUsuarioTests extends TestCase{

    // /**
    //  * @before
    //  */
    // public function setUpDeleteAll(){
    //     $DAO = new DAOUsuario();
    //     $DAO->deleteAll();
    // }

    public function testCadastro(){
        $usuario = new Usuario();
        //$fornecedor->setId();
        
        $usuario->setNome('William'.rand());
        $usuario->setSenha('123456');
        
       
        $DAO = new DAOUsuario();
        $msg = $DAO->cadastrarUsuario($usuario);
        $this->assertEquals($msg, "Cadastrado com Sucesso!");
    }
}