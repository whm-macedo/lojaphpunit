<?php
namespace LOJA\API;

use LOJA\DAO\DAOPedido;

class PedidoVisualizar{
    public $pedido; 
    

    public function __construct(){
       
           
        $DAO = new DAOPedido();
        $this->pedido = $DAO->buscarPedidoCliente($_SESSION['idpedido']);          
           
        
    }
}
?>