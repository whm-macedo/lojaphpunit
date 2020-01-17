<?php
namespace LOJA\Model;
use LOJA\Model\Cliente;

// pk_pedido data_pedido frete dias fk_cliente
class Pedido{
    private $pk_pedido ;
    private $data;
    private $frete;
    private $dias;
	private $cliente;
	private $total;

    public function __construct(){
        
	}
	public function getTotal()
	{
		return $this->total;
	}
	public function setTotal($total)
	{
		$this->total = $total;
	}

    public function getPk_pedido (){
		return $this->id;
	}

	public function setPk_pedido ($pk_pedido){
		$this->pk_pedido = $pk_pedido;
	}

	public function getData(){
		return $this->data;
	}

	public function setData($data){
		$this->data = $data;
	}

	public function getFrete(){
		return $this->frete;
	}

	public function setFrete($frete){
		$this->frete = $frete;
	}

	public function getDias(){
		return $this->dias;
	}

	public function setDias($dias){
		$this->dias = $dias;
	}

	public function getCliente(){
		return $this->cliente;
	}

	public function setCliente($cliente){
		$this->cliente = $cliente;
	}
}