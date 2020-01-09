<?php
namespace Facebook\WebDriver\Remote;
use Facebook\WebDriver\Interactions\WebDriverActions;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverNavigation;
use Facebook\WebDriver\WebDriverOptions;
use Facebook\WebDriver\WebDriverWait;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverSelect;
use PHPUnit\Framework\TestCase;


class WebTestNewProduto extends TestCase
{
    protected $webDriver;
    protected $url = 'https://www.google.com';
    protected $googlesearchpage;
    protected $searchresultspage;

    public function testOpen()
    {
        
        $host = 'http://localhost:4444/wd/hub';

        $driver = RemoteWebDriver::create($host, DesiredCapabilities::firefox());

        // LOGIN
        $driver->get('http://localhost/lojavirtual/www/login/adm');
        $driver->findElement(WebDriverBy::id('nome'))->sendKeys("daniel");
        $driver->findElement(WebDriverBy::id('senha'))->sendKeys("123");

        $submitElement = $driver->findElement(WebDriverBy::id('singlebutton'));
        $submitElement->click();

        // PREENCHER NOME, PREÇO E DESCRIÇÃO
        $driver->get('http://localhost/lojavirtual/www/produto/cadastrar');
        $driver->findElement(WebDriverBy::id('nome'))->sendKeys("Produto Teste");
        $driver->findElement(WebDriverBy::id('preco'))->sendKeys(20.5);
        $driver->findElement(WebDriverBy::id('descricao'))->sendKeys(20.5);
        
        // Elemento Select
        $departamentoElement = $driver->findElement(WebDriverBy::id('departamento'));
        $select = new WebDriverSelect($departamentoElement);
        $select->selectByIndex(1); // Ordem dos elementos no select

        // Elemento file
        $fileInput = $driver->findElement(WebDriverBy::id('imagem'));
        $fileInput->setFileDetector(new LocalFileDetector());
        $fileInput->sendKeys("C:/xampp1/htdocs/lojavirtual/tests/View/xbox.jpg"); // Path da imagem

        // Tenta cadastrar
        $submitElement = $driver->findElement(WebDriverBy::id('singlebutton'));
        $submitElement->click();

        // Verificar se msg é cadastrado com sucesso
        $msg = $driver->findElement(WebDriverBy::id('msg'))->getText();
        $this->assertEquals($msg, "Cadastrado com sucesso");
    
    }


}