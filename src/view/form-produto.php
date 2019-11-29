<?php

  include "view/header.php";
  
?>
<div class="offset-md-4">
  <form class="form-horizontal" method="post" action="cadastrar" enctype="multipart/form-data">
      <fieldset>

      <!-- Form Name -->
      <legend>Cadastro de Produto</legend>

      <!-- Text input-->
      <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Nome</label>  
      <div class="col-md-4">
      <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">
          
      </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
      <label class="col-md-4 control-label" for="preco">Preço</label>  
      <div class="col-md-4">
      <input id="preco" name="preco" type="text" placeholder="" class="form-control input-md" required="">
          
      </div>
      </div>

      <div class="form-group">
      <label class="col-md-4 control-label" for="senha">Categoria</label>  
      <div class="col-md-4">
      <select name="categoria" class="form-control input-mb">

      <?php foreach ($lista as $categoria) {?>

          <option value="<?php echo $categoria['pk_categoria']?>">
          
          <?php echo $categoria['nome']?>

          </option>

          <?php }?>
      </select>
      
          
      </div>
      </div>

    <!-- Text input-->
    <div class="form-group">
                  <label class="col-md-4 control-label" for="descricao">Imagem    </label>  
                  <div class="col-md-4">
    <input id="imagem" name="imagem" type="file" placeholder="" class="form-control input-md" required="">
    </div>
              </div>

      <!-- Button -->
      <div class="form-group">
      <label class="col-md-4 control-label" for="cadastrar"></label>
      <div class="col-md-4">
          <button id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>
      </div>
      </div>

      

      </fieldset>
  </form>
</div>
<?php

  include "view/footer.php";
  
?>
