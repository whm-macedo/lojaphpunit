<?php 
   use LOJA\includes\Config;
    require "includes/autoload.php";
    require "config/Constante.php";
    session_start();
    
   
    
    // capturando os dados da url
    // Ex.: http://localhost/lojavirtual/admin/departamento/cadastrar/listar
    // model = departamento & action=listar
    // começa a contar do adin, pois o htaccess está na raiz

    @$router = $_GET['model'].$_GET['action'];
    // router = departamento/cadastrar/listar
    $view = "";
    $config = new Config();
    $url = $config->url;

    // config
    //$url = "http://localhost/lojaphpunit/src/";
    //$url = "http://doemais.web70113.uni5.net/";

    switch($router){
        /**CATEGORIA */
        case 'categoriacadastrar':
            \LOJA\includes\Seguranca::restritoAdm();            
            $obj = new \LOJA\API\CategoriaCadastrar;
            $msg = $obj->msg;
            $view = "form-categoria.php";
        break;
        case 'categorialistar':
            \LOJA\includes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\CategoriaListar;            
            $lista = $obj->lista;
            $view = "lista-categoria.php";
        break;
        case 'categoriavisualizar':
            \LOJA\includes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\CategoriaVisualizar; 
            $categoria = $obj->dados;
            $view = "visualiza-categoria.php";
        break;
        /**CATEGORIA */


        /**CLIENTE */

        case 'logincliente':
            $obj = new \LOJA\API\ClienteLogar;
            $msg = $obj->msg;
            $view = 'form-login-cliente.php';
            break;


        case 'clientecadastrar':        
            $obj = new \LOJA\API\ClienteCadastrar;
            $msg = $obj->msg;
            $view = "form-cliente.php";
        break;            
        case 'clientelistar':
            \LOJA\includes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\ClienteListar;            
            $lista = $obj->lista;
            $view = "lista-cliente.php";
        break;           
        case 'clientevisualizar':
            //\LOJA\includes\Seguranca::restritoAdm();

            $obj = new \LOJA\API\ClienteEditar;
            $msg = $obj->msg;

            $obj = new \LOJA\API\ClienteVisualizar; 
            $cliente = $obj->cliente;
            $view = "visualiza-cliente.php";
        break;           
        // case 'clienteeditar':
        //     //\LOJA\includes\Seguranca::restritoAdm();
        //     $obj = new \LOJA\API\ClienteEditar; 
        //     $cliente = $obj->cliente;
        //     $view = "edita-cliente.php";
        // break;

        /**CLIENTE */

        /**PRODUTOS */
        case 'produtocadastrar':
            \LOJA\includes\Seguranca::restritoAdm();
        
            $obj = new \LOJA\API\ProdutoCadastrar;
            $msg = $obj->msg;

            $obj2 = new \LOJA\API\CategoriaListar;          
            $lista = $obj2->lista;

            $view = "form-produto.php";
        break;
        case 'produtolistar':
            $obj = new \LOJA\API\ProdutoListar;            
            $lista = $obj->lista;
            $view = "lista-produto.php";
        break;
        case 'produtovisualizar':
            $obj = new \LOJA\API\ProdutoVisualizar;            
            $produto = $obj->produto;
            //echo $produto->getNome();
            $view = "detalhe-produto.php";

        break;
        case 'produtobuscar':
            $obj = new \LOJA\API\ProdutoBuscar;            
            $produto = $obj->produto;
            //echo $produto->getNome();
            $view = "detalhe-produto.php";

        break;
        /**PRODUTOS */
        
        /**USUARIO */
        case 'usuariocadastrar':
            \LOJA\includes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\UsuarioCadastrar;
            $msg = $obj->msg;
            $view = "form-usuario.php";
        break;
        case 'usuariolistar':
            \LOJA\includes\Seguranca::restritoAdm();
            $obj = new \LOJA\API\UsuarioListar;
            $lista = $obj->lista;
            $view = "lista-usuario.php";
        break;
        case 'usuariovisualizar':
            //\LOJA\includes\Seguranca::restritoAdm();
            $obj = new LOJA\API\UsuarioVisualizar;
            $usuario = $obj->dados;
            $view = "visualiza-usuario.php";
        break;
        /**USUARIO */

        /**FORNECEDOR */
        case 'fornecedorcadastrar':
            \LOJA\includes\Seguranca::restritoAdm();
            $obj = new LOJA\API\FornecedorCadastrar;
            $msg = $obj->msg;
            $view = "form-fornecedor.php";
        break;        
        case 'fornecedorlistar':
            \LOJA\includes\Seguranca::restritoAdm();
            $obj = new LOJA\API\FornecedorListar;
            $lista = $obj->lista;
            $view = "lista-fornecedor.php";
        break;
        case 'fornecedorvisualizar':
            \LOJA\includes\Seguranca::restritoAdm();
            $obj = new LOJA\API\FornecedorVisualizar;
            $fornecedor = $obj->dado;            
            $view = "visualiza-fornecedor.php";
        break;
        /**FORNECEDOR */

        /**CARRINHO */
        case 'carrinhoadicionar':
        $obj = new \LOJA\API\CarrinhoVisualizar;
        
        $view = 'carrinho.php';
        break;
        case 'carrinhoremover':
            $obj = new \LOJA\API\CarrinhoRemover;
            //$lista = $obj->lista;
            $view = 'carrinho.php';
        break;
        case 'carrinho':
            $view = 'carrinho.php';
        break;
        /**CARRINHO */

                
        /**LOGIN ADMIN */
        case 'loginadm':            
            $obj = new \LOJA\API\UsuarioLogar;
            $msg = $obj->msg;
            $view = 'form-login-adm.php';
        break;
        /**LOGIN ADMIN */


        /**PAINEL CLIENTE */
        case 'painelcliente':
            $obj = new \LOJA\API\UsuarioLogar;
            $view = "painel-cliente.php";
        break;
        /**PAINEL CLIENTE */
        
       /**PAINEL LOGOFF */
        case 'painellogoff':
            $obj = new \LOJA\API\UsuarioLogoff;
            $view = 'form-login-adm.php';
        break;
        /**PAINEL LOGOFF */

        /**PAINEL LOGOFF */
        case 'clientelogoff':
        $obj = new \LOJA\API\ClienteLogoff;
        $view = 'form-login-cliente.php';
        break;
        /**PAINEL LOGOFF */
        

        /**PAINEL LOGOFF */
        case 'usuariologoff':
        $obj = new \LOJA\API\UsuarioLogoff;
        $view = 'form-login-adm.php';
        break;
        /**PAINEL LOGOFF */
    
        /**PAINEL ADM */
        case 'paineladm':
            //\LOJA\includes\Seguranca::restritoAdm();
            $view = 'painel-adm.php';
        break;
        /**PAINEL ADM */

        case 'projeto':
            $view = 'projeto.php';
        break;

        case 'mapas':
            $view = 'lista-mapa.php';
        break; 

        case 'pedidofinalizar':
            //\LOJA\includes\Seguranca::restritoUsuario();
            $obj = new \LOJA\API\PedidoCadastrar;
            
        break;
        
        case 'comofunciona':
            $view = 'como-funciona.php';
        break;
        
        case 'voluntario':
            $view = 'voluntario.php';
        break;

        case 'home':
                $obj = new \LOJA\API\CategoriaListar;
                $lista = $obj->lista;

                // $obj = new \LOJA\API\ProdutoListar;
                // $lista2 = $obj->lista;

                $obj = new \LOJA\API\ProdutoListarHome;
                $lista2 = $obj->lista;

                $view = "home.php";

                // $view = "lista-produto.php";
        break;

        case 'fretecalcular':
            $obj = new \LOJA\API\CalcularFrete;
            $frete = $obj->frete;

            $view = "carrinho.php";
        break;
        // Pagamento
        case 'pagamento':
            // $obj = new \LOJA\API\Pagamento;

            $view = "pagamento.php";
        break;

        default:
                $obj = new \LOJA\API\ProdutoListarHome;
                $lista2 = $obj->lista;

            $view = "home.php";
        break; 
    }

  
    include "view/{$view}";
