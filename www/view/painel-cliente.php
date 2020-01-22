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
                <p><?php echo $_SESSION["clientenome"]; ?>, Aqui você pode editar suas informações do usuário, visualizar seu pedidos, voltar a loja e torna-se um voluntario

                </p>
            </div>
        </div>
    </div>  
   </div>
