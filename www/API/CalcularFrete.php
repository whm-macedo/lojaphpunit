<?php

namespace LOJA\API;

use LOJA\Model\Frete;

class CalcularFrete
{

    public $frete;

    function __construct()
    {

        if (isset($_POST['cep'])) {

            $codServico = '41106';
            $cepOrigem = "11680000";
            $cepDestino = $_POST['cep'];
            $peso = '1';
            $altura = '15';
            $largura = '22';
            $comprimento = '32';
            $valorDeclarado = 0;

            $frete = new Frete(
                $codServico,
                $cepOrigem,
                $cepDestino,
                $peso,
                $altura,
                $largura,
                $comprimento,
                $valorDeclarado
            );

            //echo $frete->getUrl();
            $xml = simplexml_load_file($frete->getUrl());
            $frete->setValor($xml->cServico->Valor);
            $frete->setPrazoEntrega($xml->cServico->PrazoEntrega);

            echo $xml->cServico->Valor;

            $this->frete = $frete;
        }
    }
}
