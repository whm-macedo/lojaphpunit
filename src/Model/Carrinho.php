<?php
namespace LOJA\Model;
use LOJA\Model\Item;
use LOJA\Model\Produto;
use LOJA\DAO\DAOProduto;

class Carrinho{
    private $id;
    private $lista;

    public function __construct()
    {
        $this->lista = [];
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId()
    {
        $this->id = $id;
    }

    public function addItem($id)
    {
        $dao = new DAOProduto();
        $obj = new Produto();
        $obj = $dao->buscaPorId($id);
        
        if($obj->getPk_produto()){
            $item = new Item();
            $item->setProduto($obj);
            $item->setQuantidade(1);
            //print_r($item); Testar a Saída
        };
        array_push($this->lista,$item);
    }  
    public function removeItem($id)
    {
        foreach ($this->lista as $item) {
            if ($item->getProduto()->getPk_produto()===$id) {
                $index = array_search($item, $this->lista, true);
                unset($this->lista[$index]);
            };
        }
    }
    public function getItems(){
        return $this->lista;
    }
    public function getLista(){
        return $this->lista;
    }
    public function setLista($lista){
        $this->lista = $lista; 
    }
}