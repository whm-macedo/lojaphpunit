<?php
namespace LOJA\Model;
use LOJA\Model\Cliente;

// pk_pedido data_pedido frete dias fk_cliente
class Pedido{
    private $id;
    private $data;
    private $frete;
    private $dias;
    private $cliente;

    public function __construct(){
        
    }
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
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