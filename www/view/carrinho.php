<?php include "header.php" ?>
<div class="container">
    <div class="row ">

        <?php
        @$carrinho = $_SESSION['carrinho'];

        if ($carrinho === null || empty($carrinho->getItems())) {
            // Inicio HTML
            ?>

            <div class="col-md-12 mt-5 ">
                <div class="jumbotron rounded-left ">
                    <div class="container text-center ">
                        <h1 class="display-4"><i class="far fa-tired"></i>OPS!</h1>
                        <p class="lead">Seu carrinho está vazio</p>
                    </div>
                </div>
            </div>

        <?php
            // Fim HTML
        } else {


            ?>
            <div class="col-md-8">
                <h2 class="display-6 text-center mt-2"> Meus pedidos</h2>
                <hr style="color:cadetblue">
                <?php
                    foreach ($carrinho->getItems() as $item) {

                        $produto = $item->getProduto();
                        $linkRemove = BASEURL."carrinho/remover/" . $produto->getPk_produto();

                        // Inicio HTML

                        ?>



                    <div class="row mb-2 ">

                        <div class="col-md-3 p-0">
                            <div class="card">
                                <img class="card-img-top grow" src="<?php echo BASEURL . 'view/img/produtos/' . $produto->getImagem(); ?>" alt="Imagem de capa do card">
                            </div>
                        </div>

                        <div class="cold-md-4 ">

                            <div class="card card-carrinho" style="width: 18rem;">
                                <div class="card-body  ">
                                    <h5 class="card-title mb-0">
                                        <p><?php echo $produto->getNome(); ?></p>
                                        <p class="card-text mb-0 ">Descrição do produto</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <div class="dropdown ">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                1
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">+1</a>
                                                <a class="dropdown-item" href="#">+2</a>
                                                <a class="dropdown-item" href="#">+3</a>
                                            </div>

                                        </div>
                                </div>

                            </div>

                        </div>
                        <div class="cold-md-3">
                            <div class="card-body">
                                <h5 class="card-title mb-0">15.000</h5>
                                <p class="card-text">Essa camisa está com desconto</p>
                                <div>
                                    <a href="<?php echo $linkRemove; ?>" class="btn btn-danger">Remover</a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <hr style="color:cadetblue">



                <?php
                        // Fim HTML

                    }

                    ?>
            </div>
            <div class="col-md-4">
                <h2 class="display-5"> Total da Compra:</h2>
            </div>
    </div>

<?php

}

?>

</div>
<!-- Colocar onde quer que apareca o o valor -->
<form method="POST" action="<?php echo BASEURL; ?>frete/calcular ">
    <label for="">Frete</label>
    <input type="text" size="20" name="cep">
    <button>Calcular</button>
    <?php
        if (isset($_POST['cep'])) {
            echo "<p>Preço: R$ ".$frete->getValor()."</p>";
            echo "<p>Entrega: R$ ".$frete->getPrazoEntrega()." dias</p>";
        }
    ?>

<div class="col-md-12 mt-5">
            <a href="<?php echo BASEURL. "cliente/cadastrar"; ?>" class="btn btn-danger">Finalizar Pedido</a>
        </div>
</form>

<?php include "footer.php" ?>