<?php include "view/header.php"; ?>

<div class="jumbotron">
  <div class="container">
    <h1 class="display-4 justify-content-center" style="color:red"><i class="fas fa-cart-plus"
        style="color: #ff0000;"></i> Produtos</h1>
    <hr style="background-color: red;">

    <div class="container">
      <div class="row mt-3"> 
        <?php foreach ($lista as $produto) {          
           $linkRemove = "http://localhost/projetomvc2/src/carrinho/adicionar/".$produto['id'];          
        ?>


        
          <div class="col-sm-3 mb-3">
            <div class="card h-100 ">
              <a href="#"><img class="card-img-top" src="<?php echo $url."/View/img/produtos/".$produto['imagem']?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"></a>
                </h4>
                <h3><?php echo $produto['nome']?></h3>
                <h5>R$: <?php echo number_format($produto['preco'],2,",",".");?></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
              <a type="button" class="btn btn-primary" href="<?php echo $linkRemove; ?>">Comprar
                <!-- <button type="button" class="btn btn-primary">Comprar</button> -->
              </a>

              
            </div>
          </div>
        <?php }?>
      
    </div>
  </div>
</div> 

<?php include "view/footer.php"; ?>