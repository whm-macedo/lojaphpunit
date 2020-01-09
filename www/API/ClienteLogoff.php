<?php 
namespace LOJA\API;

class ClienteLogoff
{
    function __construct()
    {
        unset($_SESSION['clienteid']);
        unset($_SESSION['clientenome']);
        unset($_SESSION);
        header ("location: ".BASEURL);
    }
}
