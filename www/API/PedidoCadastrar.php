<?php
namespace LOJA\API;
use LOJA\Model\Cliente;
use LOJA\Model\Pedido;
use LOJA\Model\Carrinho;
use LOJA\DAO\DAOPedido;

class PedidoCadastrar{
    public $msg;

    function __construct(){
        
        try{
            $c = new Cliente();
            $c->setPk_cliente($_SESSION['clienteid']); //isere um id ja existente
            $c->setNome($_SESSION['clientenome']);

            $obj = new Pedido();
            //$c->setPk_pedido();
            $obj->setData('2019-12-25');
            $obj->setFrete(20.00);
            $obj->setDias(5);
            $obj->setCliente($c);

            $DAO = new DAOPedido();
            $this->msg =$DAO->cadastrar($obj,$_SESSION['carrinho']);
            header("location:".BASEURL."painel/cliente");
       
        }catch(\Exception $e){
            $this->msg = $e->getMessage();
            echo $this->msg;
            header("location:".BASEURL."login/cliente");

        }
        }
    }

