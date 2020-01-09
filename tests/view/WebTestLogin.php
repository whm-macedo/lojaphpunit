<?php
namespace Facebook\WebDriver\Remote;
use Facebook\WebDriver\Interactions\WebDriverActions;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverNavigation;
use Facebook\WebDriver\WebDriverOptions;
use Facebook\WebDriver\WebDriverWait;
use Facebook\WebDriver\WebDriverBy;
use PHPUnit\Framework\TestCase;

class WebTest extends TestCase{
    protected $webDriver;
    protected $url = 'https://www.google.com';
    protected $googlesearchpage;
    protected $searchresultspage;

    public function testOpen(){
        $host = 'http://localhost:4444/wd/hub';

        $driver = RemoteWebDriver::create($host, DesiredCapabilities::firefox());
        
        $driver->get('http://localhost/lojaphpunit/www/login/adm');
        $driver->findElement(WebDriverBy::id('nome'))->sendKeys('campos');
        $driver->findElement(WebDriverBy::id('senha'))->sendKeys('senha');
        $submitElement = $driver->findElement(WebDriverBy::id('login'));
        $submitElement->click();


        $driver->get('http://localhost/lojaphpunit/www/produto/cadastrar');
        $driver->findElement(WebDriverBy::id('nome'))->sendKeys('Camisa polo');
        $driver->findElement(WebDriverBy::id('preco'))->sendKeys('100,00');
        $driver->findElement(WebDriverBy::id('imagem'))->sendKeys('teste.jpg');
        $driver->findElement(WebDriverBy::id('categoria'))->sendKeys('Roupa');

        $submitElement = $driver->findElement(WebDriverBy::id('cadastrar'));
        $submitElement->click();
        $msg = $driver->findElement(WebDriverBy::id('msg'))->getText();
        $this->assertEquals($msg, "Cadastrado com sucesso");
// brasil
    }
}