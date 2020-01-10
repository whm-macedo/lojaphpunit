<?php include "view/header-cliente.php"; 
 //$_SESSION["clientenome"] = ($_POST['nome']);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6">
            <div class="alert alert-info  mt-5">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×
                </button>
               <span class="glyphicon glyphicon-ok"></span> <strong>Bem-vindo, <?php echo $_SESSION["clientenome"];?>!</strong>
                <hr class="message-inner-separator">
                <p><?php echo $_SESSION["clientenome"]; ?>,Você se encontrar na parte administrativa 
                do sistema onde pode manipular os elementos da sua loja virtual. 
                </p>
            </div>
        </div>
    </div>
   <div>aqui tem que entrar um visual para os pedidos do usuario uma lista por exemplo</div>
   <div> outro espaco com as informações do proprio cliente, para ele editar se quiser...
    <a href='
    <?php echo BASEURL?>cliente/visualizar/<?php echo$_SESSION["clienteid"];?>'
    >Visualizar</a>
   </div>

