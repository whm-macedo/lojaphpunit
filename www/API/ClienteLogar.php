<?php
namespace LOJA\API;
use LOJA\Model\Cliente;
use LOJA\DAO\DAOCliente;

class ClienteLogar{
    public $msg;

    function __construct($url){
        if ($_POST) {
            try {
                $obj = new Cliente();
                $obj->setEmail($_POST['email']);
                $obj->setSenha($_POST['senha']);

                $DAO = new DAOCliente();
                $result = $DAO->buscaPorEmailSenha($obj);
                $this->verificarUrl($url);

                if($result){
                    $_SESSION['clienteid'] = $result['id'];
                    $_SESSION['clientenome'] = $result['nome'];
                    
                    // header("location: http://localhost/lojaphpunit/src/painel/adm");
                    //header ("location:".BASEURL."painel/cliente");
                }else{
                    $this->msg = 'Usuário/Senha inválidos';
                }
            }catch (\Exception $e) {
                $this->msg = $e->getMessage();
               
            }
        }
    }

        function verificarUrl($url){

            if(isset($_SESSION['url'])){

            $url2 = $_SESSION['url'];
            unset($_SESSION['url']);
            header("location:".$url2);

            }else{
                header("location: ".$url."/painel/cliente");
            }
        }
}

