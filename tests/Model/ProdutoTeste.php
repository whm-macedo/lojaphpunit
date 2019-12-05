<?php

use LOJA\Model\Categoria;
use PHPUnit\Framework\TestCase;
use LOJA\Model\Produto;

class ProdutoTest extends TestCase{
    public function testClass()
    {
        $produto = new Produto();
        $produto->setPk_produto('1');
        $produto->setNome('Kaio');
        $produto->setPreco('100.000.000');
        $produto->setCategoria('Lindo');
        $produto->setImagem('lindo.jpg');

        $this->assertEquals($produto->getPk_produto(), '1');
        $this->assertEquals($produto->getNome(), 'Kaio');
        $this->assertEquals($produto->getPreco(), '100.000.000');
        $this->assertEquals($produto->getCategoria(), 'Lindo');
        $this->assertEquals($produto->getImagem(), 'lindo.jpg');
    }
    public function testErrorNome(){
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Nome Inválido');
        
        $c = new Produto();
        $c->setNome("");
    }
    public function testErrorPreco(){
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Preço Inválido');
        
        $c = new Produto();
        $c->setPreco("");
    }
    public function testErrorCategoria(){
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Categoria Inválida');
        
        $c = new Produto;
        $c->setCategoria("");
    }
    public function testErrorImagem(){
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Imagem Inválida');
        
        $c = new Produto;
        $c->setImagem("");
    }

}