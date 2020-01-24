<?php include "view/header.php"; ?>

<main class="m-3">
  <div class="container border p-2">
    <div class="row">
      <div class="col-sm-4">
        <a href="#"><img class="card-img-top" src="<?php echo BASEURL . 'view/img/produtos/' . $produto->getImagem(); ?>" alt=""></a>
      </div>
      <div class="col-sm-8">
        <div class="text-left">
          <h3><?php echo $produto->getNome() ?></h3>
          <h5>R$: <?php echo number_format($produto->getPreco(), 2, ",", "."); ?></h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
          </p>
          <div class="dropdown mb-1 ">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              1
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">+1</a>
              <a class="dropdown-item" href="#">+2</a>
              <a class="dropdown-item" href="#">+3</a>
            </div>

          </div>
          <a type="button" class="btn btn-primary mb-1" href="<?php echo $addCarrinho; ?>">Comprar
            <!-- <button type="button" class="btn btn-primary">Comprar</button> -->
          </a>
          
        </div>
        <div class="row">
          <ul class="nav nav-tabs ">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Descrição</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Informações técnicas</a>
            </li>



          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <p>Camiseta azul feita em algodão com caimento perfeito proporcionando leveza e conforto nos movimentos.</p>
              <p>Camiseta meia manga com decote arrendondado e importada.</p>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <p>Feita em algodão importado.</p>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</main>

<?php $addCarrinho = BASEURL . "carrinho/adicionar/" . $produto->getPk_produto(); ?>
<!-- INICIO Carrosel de produtos -->
<div id="demo" class="carousel slide item-prod" data-ride="carousel" style="height: 480px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner" style="height: 480px;">


    <div class="carousel-item item-prod active">
      <div class="container">
        <div class="row mt-3">
          <?php foreach ($lista2 as $produto) {
            $linkRemove = BASEURL . "carrinho/adicionar/" . $produto['id'];
          ?>
            <div class="col-sm-3 mb-3">
              <div class="card h-100 ">
                <a href="#"><img class="card-img-top grow" style="height: 190px;" src="<?php echo BASEURL . "view/img/produtos/" . $produto['imagem'] ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"></a>
                  </h4>
                  <h3><?php echo $produto['nome'] ?></h3>
                  <h5>R$: <?php echo number_format($produto['preco'], 2, ",", "."); ?></h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                  </p>
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
                <a href="#"><img class="card-img-top grow" style="height: 190px;" src="<?php echo BASEURL . "view/img/produtos/" . $produto['imagem'] ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"></a>
                  </h4>
                  <h3><?php echo $produto['nome'] ?></h3>
                  <h5>R$: <?php echo number_format($produto['preco'], 2, ",", "."); ?></h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                  </p>
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
                <a href="#"><img class="card-img-top grow" style="height: 190px;" src="<?php echo BASEURL . "view/img/produtos/" . $produto['imagem'] ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"></a>
                  </h4>
                  <h3><?php echo $produto['nome'] ?></h3>
                  <h5>R$: <?php echo number_format($produto['preco'], 2, ",", "."); ?></h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                  </p>
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
<?php include "view/footer.php"; ?>