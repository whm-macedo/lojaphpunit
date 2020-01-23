<?php
namespace LOJA\API;

use LOJA\DAO\DAOPedido;

class PedidoListar{
    public $pedido; 
    

    public function __construct(){
       
           
        $DAO = new DAOPedido();
        $this->pedido = $DAO->listarPedidoCliente($_SESSION['clienteid']);          
           
        
    }
}
?>