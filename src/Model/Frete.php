<?php

namespace LOJA\Model;

class Frete{

    private $codServico; // codigo do servico desejado
    // 41106 PAC sem contrato
    // 40010 SEDEX sem contrato
    // 40045 SEDEX a Cobrar, sem contrato
    // 40215 SEDEX 10, sem contrato
    private $cepOrigem;  /* cep de origem, apenas numeros */
    private $cepDestino; /* cep de destino, apenas numeros */
    private $peso;        // Kg incluindo a embalagem: 0.1, 0.3, 1, 2
    private $altura;      /* altura do produto em cm incluindo a embalagem */
    private $largura;     /* altura do produto em cm incluindo a embalagem */
    private $comprimento; /* comprimento do produto incluindo embalagem em cm */
    private $valorDeclarado='1'; /* indicar 0 caso nao queira o valor declarado */
    private $prazoEntrega;
    private $valor;



    public function __construct($codServico,$cepOrigem,$cepDestino,$peso,
                                $altura,$largura,$comprimento,$valorDeclarado){

        $this->setCodServico($codServico);
        $this->setCepOrigem($cepOrigem); 
        $this->setCepDestino($cepDestino);
        $this->setPeso($peso);
        $this->setAltura($altura);
        $this->setLargura($largura);
        $this->setComprimento($comprimento);
        $this->setValorDeclarado($valorDeclarado);

    }

    public function getCodServico(){
        return $this->codServico;
    }

    public function setCodServico($codServico){
        $this->codServico = $codServico;
    }

    public function getCepOrigem(){
        return $this->cepOrigem;
    }

    public function setCepOrigem($cepOrigem){
        $this->cepOrigem = $cepOrigem;
    }

    public function getCepDestino(){
        return $this->cepDestino;
    }

    public function setCepDestino($cepDestino){
        $this->cepDestino = $cepDestino;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function getLargura(){
        return $this->largura;
    }

    public function setLargura($largura){
        $this->largura = $largura;
    }

    public function getComprimento(){
        return $this->comprimento;
    }

    public function setComprimento($comprimento){
        $this->comprimento = $comprimento;
    }

    public function getValorDeclarado(){
        return $this->valorDeclarado;
    }

    public function setValorDeclarado($valorDeclarado){
        $this->valorDeclarado = $valorDeclarado;
    }

	public function getPrazoEntrega(){
		return $this->prazoEntrega;
	}

	public function setPrazoEntrega($prazoEntrega){
		$this->prazoEntrega = $prazoEntrega;
	}

	public function getValor(){
		return $this->valor;
	}

	public function setValor($valor){
		$this->valor = $valor;
	}



    public function getUrl(){
        $correios = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=&sDsSenha=&"
        ."sCepOrigem=".$this->getCepOrigem()
        ."&sCepDestino=".$this->getCepDestino()
        ."&nVlPeso=".$this->getpeso()
        ."&nCdFormato=1&nVlComprimento=".$this->getcomprimento()
        ."&nVlAltura=".$this->getAltura()
        ."&nVlLargura=".$this->getLargura()."&sCdMaoPropria=n"
        ."&nVlValorDeclarado=".$this->getValorDeclarado()."&sCdAvisoRecebimento=n&"
        ."nCdServico=".$this->getCodServico()."&nVlDiametro=0&StrRetorno=xml";
        return $correios;
    }

}