<?php
namespace LOJA\API;
use LOJA\Model\Cliente;
use LOJA\DAO\DAOCliente;

class ClienteLogar{
    public $msg;

    function __construct(){
        if ($_POST) {
            try {
                $obj = new Cliente();
                $obj->setNome($_POST['nome']);
                $obj->setSenha($_POST['senha']);

                $DAO = new DAOCliente();
                $result = $DAO->buscaPorNomeSenha($obj);

                if($result){
                    $_SESSION['clienteid'] = $result['id'];
                    $_SESSION['clientenome'] = $result['nome'];
                    
                    // header("location: http://localhost/lojaphpunit/src/painel/adm");
                    header ("location:".BASEURL."painel/cliente");
                }else{
                    $this->msg = 'Usuário/Senha inválidos';
                }
            }catch (\Exception $e) {
                $this->msg = $e->getMessage();
               
            }
        }
    }
}

