<?php include "view/header-adm.php"; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6">
            <div class="alert alert-info  mt-5">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
               <span class="glyphicon glyphicon-ok"></span> <strong>Bem-vindo, <?php echo $_SESSION["usuarionome"];?>!</strong>
                <hr class="message-inner-separator">
                <p><?php echo $_SESSION["usuarionome"]; ?>,Você se encontrar na parte administrativa 
                do sistema onde pode manipular os elementos da sua loja virtual. 
                </p>
            </div>
        </div>
    </div>
</div>

    <!-- //<?php echo $_SESSION["usuarionome"]; ?>
    <a href="<?php echo BASEURL; ?>painel/logoff"> Sair</a> -->

    <?php include "footer.php"?>