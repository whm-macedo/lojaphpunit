<?php
namespace LOJA\API;
use LOJA\Model\Cliente;
use LOJA\DAO\DAOCliente;

class ClienteCadastrar{

    public $msg;

    function __construct(){

if ($_POST) {
    try {
        $obj = new Cliente();
        $obj-> setNome($_POST['nome']);
        $obj-> setTelefone($_POST['telefone']);
        $obj-> setEmail($_POST['email']);
        $obj-> setCpf($_POST['cpf']);
        $obj-> setRua($_POST['rua']);
        $obj-> setComplemento($_POST['complemento']);
        $obj-> setCep($_POST['cep']);
        $obj-> setUf($_POST['uf']);
        $obj-> setBairro($_POST['bairro']);

        $DAO = new DAOCliente();
        $this->msg = $DAO->cadastrar($obj);

    } catch (Exception $e) {
        $this->msg = $e->getMessage();
    }
}
}
}

?>