<?php
namespace LOJA\API;
use LOJA\Model\Cliente;
use LOJA\DAO\DAOCliente;     

class ClienteEditar{
    public $msg;

    public function __construct(){
        if ($_POST) {
            try {
                $obj = new Cliente();

                $obj-> setPk_cliente($_POST['id']);
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

                                    
                $DAO = new DAOCliente();
                $this->msg = $DAO->editarPorId($obj);
               
            } catch (\Exception $erro) {
                $this->msg = $erro->getMessage();
            }
        }
    
}
}
