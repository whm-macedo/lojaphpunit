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
        
        $driver->get('http://localhost/lojaphpunit/www/cliente/cadastrar');
        $driver->findElement(WebDriverBy::id('nome'))->sendKeys('Nome');
        $driver->findElement(WebDriverBy::id('senha'))->sendKeys('Senha');
        $driver->findElement(WebDriverBy::id('telefone'))->sendKeys('21982786865');
        $driver->findElement(WebDriverBy::id('email'))->sendKeys('kaiocamposti@gmail.com');
        $driver->findElement(WebDriverBy::id('cpf'))->sendKeys('05861238731');
        $driver->findElement(WebDriverBy::id('rua'))->sendKeys('Lomas');
        $driver->findElement(WebDriverBy::id('complemento'))->sendKeys('Casa');
        $driver->findElement(WebDriverBy::id('cep'))->sendKeys('21715190');
        $driver->findElement(WebDriverBy::id('uf'))->sendKeys('RJ');
        $driver->findElement(WebDriverBy::id('bairro'))->sendKeys('Realengo');

        $submitElement = $driver->findElement(WebDriverBy::id('cadastrar'));
        $submitElement->click();
        $msg = $driver->findElement(WebDriverBy::id('msg'))->getText();
        $this->assertEquals($msg, "Cadastrado com sucesso");
// brasil penta campeao
    }
}