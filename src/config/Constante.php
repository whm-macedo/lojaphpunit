<?php
namespace LOJA\config;        

/* caminho absoluto para a pasta do sistema */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	//print_r(ABSPATH);

/* caminho no server para o sistema */
if ( !defined('BASEURL') )
    define('BASEURL', 'http://localhost/projetomvc/');
// print_r(BASEURL);

#Diretórios Específicos
define('DIRIMG',BASEURL."img/");
define('DIRCSS',BASEURL."css/");
define('DIRFAW',BASEURL."css/fontawesome/css/");
define('DIRJS',BASEURL."js/");
