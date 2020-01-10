<?php
namespace LOJA\API;
use LOJA\Model\Cliente;
use LOJA\DAO\DAOCliente;     

class ClienteEditar{
    public $cliente;

    public function __construct(){
        if ($_POST) {
            try {
                $obj = new Cliente();

                $obj-> setNome($_POST['nome']);
                $obj-> setSenha($_POST['senha']);
                $obj-> setTelefone($_POST['telefone']);
                $obj-> setEmail($_POST['email']);
                $obj-> setCpf($_POST['cpf']);
                $obj-> setRua($_POST['rua']);
                $obj-> setComplemento($_POST['complemento']);
                $obj-> setCep($_POST['cep']);
                $obj-> setUf($_POST['uf']);
                $obj-> setBairro($_POST['bairro']);

                print_r($obj);
                       
                $DAO = new DAOCliente();
                $this->cliente = $DAO->editarPorId($_GET['id']);
               
            } catch (\Exception $erro) {
                $this->cliente = $erro->getMessage();
            }
        }
    
}
}
