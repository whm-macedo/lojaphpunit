<?php include "view/header.php"; ?>


<!-- CARROSEL  -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item  active text-center">
      <img class="carousel-img mt-4" src="<?php echo DIRIMG; ?>DOE+.png" alt="first slide">
      <div class="mt-4">
        <h5 style=" color:#FFFFFF ;">POSSO SER UM DOADOR?</h5>
      </div>
      <div><a class="btn  btn-primary" href="<?php echo BASEURL  ?>view/como-funciona.php" role="button" style="background-color:#FFFFFF; color: red;">Saiba Mais</a></div>

    </div>
    <div class="carousel-item">
      <img class="carousel-img" src="<?php echo DIRIMG; ?>" alt="...">

    </div>
    <div class="carousel-item">
      <img class="carousel-img" src="<?php echo DIRIMG; ?>" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- FIM CARROUSEL -->
<!-- inicio lista produto -->
<div class="jumbotron">
  <div class="container">
    <h1 class="display-4 justify-content-center" style="color:red"><i class="fas fa-cart-plus" style="color: #ff0000;"></i> Produtos</h1>
    <hr style="background-color: red;">

    <div class="container">
      <div class="row mt-3">
        <?php foreach ($lista2 as $produto) {
          $linkRemove = BASEURL . "carrinho/adicionar/" . $produto['id'];
        ?>
          <div class="col-sm-3 mb-3">
            <div class="card h-100 ">
              <a href="#"><img class="card-img-top grow" src="<?php echo BASEURL . "view/img/produtos/" . $produto['imagem'] ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"></a>
                </h4>
                <h3><?php echo $produto['nome'] ?></h3>
                <h5>R$: <?php echo number_format($produto['preco'], 2, ",", "."); ?></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
              <a type="button" class="btn btn-primary" href="<?php echo $linkRemove; ?>">Comprar
              </a>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>
</div>

<!-- fim lista produto -->
<!-- INICIO Carrosel de produtos -->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">


    <div class="carousel-item item-prod active">
      <div class="container">
        <div class="row mt-3">
          <?php foreach ($lista2 as $produto) {
            $linkRemove = BASEURL . "carrinho/adicionar/" . $produto['id'];
          ?>
            <div class="col-sm-3 mb-3">
              <div class="card h-100 ">
                <a href="#"><img class="card-img-top grow" src="<?php echo BASEURL . "view/img/produtos/" . $produto['imagem'] ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"></a>
                  </h4>
                  <h3><?php echo $produto['nome'] ?></h3>
                  <h5>R$: <?php echo number_format($produto['preco'], 2, ",", "."); ?></h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
                <a type="button" class="btn btn-primary" href="<?php echo $linkRemove; ?>">Comprar
                </a>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>
    <div class="carousel-item item-prod ">
      <div class="container">
        <div class="row mt-3">
          <?php foreach ($lista2 as $produto) {
            $linkRemove = BASEURL . "carrinho/adicionar/" . $produto['id'];
          ?>
            <div class="col-sm-3 mb-3">
              <div class="card h-100 ">
                <a href="#"><img class="card-img-top grow" src="<?php echo BASEURL . "view/img/produtos/" . $produto['imagem'] ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"></a>
                  </h4>
                  <h3><?php echo $produto['nome'] ?></h3>
                  <h5>R$: <?php echo number_format($produto['preco'], 2, ",", "."); ?></h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
                <a type="button" class="btn btn-primary" href="<?php echo $linkRemove; ?>">Comprar
                </a>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>
    <div class="carousel-item item-prod ">
      <div class="container">
        <div class="row mt-3">
          <?php foreach ($lista2 as $produto) {
            $linkRemove = BASEURL . "carrinho/adicionar/" . $produto['id'];
          ?>
            <div class="col-sm-3 mb-3">
              <div class="card h-75 px-3">
                <a href="#"><img class="card-img-top grow" src="<?php echo BASEURL . "view/img/produtos/" . $produto['imagem'] ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"></a>
                  </h4>
                  <h3><?php echo $produto['nome'] ?></h3>
                  <h5>R$: <?php echo number_format($produto['preco'], 2, ",", "."); ?></h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
                <a type="button" class="btn btn-primary" href="<?php echo $linkRemove; ?>">Comprar
                </a>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>



  </div>




  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


</div>

</div>


<!-- FIM Carrosel de produtos -->









<?php include "view/footer.php"; ?>