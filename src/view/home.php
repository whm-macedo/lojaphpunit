<?php include "view/header.php"; ?>


<!-- CARROSEL  -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active text-center">
      <img class="carousel-img mt-4" src="<?php echo DIRIMG; ?>DOE+.png" alt="first slide">
      <div class="mt-4">
        <h5 style=" color:#FFFFFF ;">POSSO SER UM DOADOR?</h5>
      </div>
      <div><a class="btn  btn-primary" href="<?php echo $url  ?>view/como-funciona.php" role="button" style="background-color:#FFFFFF; color: red;">Saiba Mais</a></div>

    </div>
    <div class="carousel-item">
      <img class="carousel-img" src="<?php echo $url; ?>" alt="...">

    </div>
    <div class="carousel-item">
      <img class="carousel-img" src="<?php echo $url; ?>" alt="...">
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
          $linkRemove = "http://localhost/lojaphpunit/src/carrinho/adicionar/" . $produto['id'];
          ?>
          <div class="col-sm-3 mb-3">
            <div class="card h-100 ">
              <a href="#"><img class="card-img-top" src="<?php echo BASEURL . "/View/img/produtos/" . $produto['imagem'] ?>" alt=""></a>
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

  <!-- fim lista produto -->


  <!-- INICIO JUMBOTRON "IMPORTANCIA DE DOAR SANGUE" -->
  <div class="jumbotron">
    <h1 class="display-9  " style="color:red">POR QUE SER UM DOADOR?</h1>
    <p class="lead">Beneficios de ser um doador</p>
    <hr class="mb-4">
    <div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-1-list" data-toggle="list" href="#list-1" role="tab" aria-controls="1">Uma doação de sangue pode salvar até 4 vidas</a>
      <a class="list-group-item list-group-item-action" id="list-2-list" data-toggle="list" href="#list-2" role="tab" aria-controls="wild">Seu organismo repõe rapidamente o sangue doado</a>
      <a class="list-group-item list-group-item-action" id="list-3-list" data-toggle="list" href="#list-3" role="tab" aria-controls="messages">Exame de Sangue Gratuito</a>
      <a class="list-group-item list-group-item-action" id="list-4-list" data-toggle="list" href="#list-4" role="tab" aria-controls="messages">Ajudar outras pessoas faz bem para você também</a>
    </div>
  </div>
  <div class="col-6">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-1" role="tabpanel" aria-labelledby="list-1-list">Após a coleta, o conteúdo da bolsa é fracionado em componentes sanguíneos (concentrado de hemácias, de plaquetas e plasma) que são examinados para que haja a certeza de que não existe a presença de nenhuma doença neles. Se há reação sorológica, a unidade é descartada. Caso contrário, os componentes são liberados e
         podem ser usados em até quatro pessoas, ou seja, podem salvar até quatro vidas.</div>
      <div class="tab-pane fade" id="list-2" role="tabpanel" aria-labelledby="list-2-list">Uma pessoa adulta, seja do sexo masculino ou feminino, possui em média cinco litros de sangue, e em uma doação são coletados no máximo 450 ml - ou seja, menos de 10% de todo o sangue. 
        Este volume é reposto em 24 horas pelo organismo.</div>
      <div class="tab-pane fade" id="list-3" role="tabpanel" aria-labelledby="list-2-list">Quem deseja doar sangue passa por uma avaliação prévia para detectar se há condições ou doenças que possam ser impeditivas para a doação. Essa entrevista e esses exames são particulares e 
        os dados e resultados são mantidos sob total sigilo.</div>
      <div class="tab-pane fade" id="list-4" role="tabpanel" aria-labelledby="list-2-list">Tanto quem recebe quanto quem doa sangue é beneficiado. A solidariedade é uma troca: psicologicamente, 
        a sensação de fazer o bem aos outros afeta positivamente o autor da ação.</div>
    </div>
  </div>
</div>
  </div>

  <!-- FIM JUMBOTRON "IMPORTANCIA DE DOAR SANGUE" -->




  <!-- INICIO MAPBOX -->
  <div class="container">
    <div class="mapbox" id='map' style='width: 100%; height: 300px;'>
      <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoicm9iZXJ0by1qdW5pb3I5OSIsImEiOiJjazJuN212YTkwMXB5M2JuejI4cTQ0MTd2In0.hXajmx4S4Ev9eaeJPKeSeA';
        var map = new mapboxgl.Map({
          container: 'map',
          style: 'mapbox://styles/mapbox/streets-v11'
        });
      </script>
    </div>
  </div>
  <!-- FIM MAPBOX -->


  <?php include "view/footer.php"; ?>