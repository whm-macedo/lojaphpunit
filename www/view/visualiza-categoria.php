<?php

  include "view/header.php";
  
?>

<form class="form-horizontal" method="POST" action="cadastrar">
    <fieldset>

    <!-- Form Name -->
    <legend class="offset-md-3">Visualizar Categoria</legend>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-6 offset-md-3 control-label" for="nome">Nome:</label>  
    <div class="col-md-6 offset-md-3">
    <input id="nome" name="nome" value="<?php echo $categoria['nome'];?>"type="text" placeholder="" class="form-control input-md" required="">
        
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
    <label class="col-md-6 offset-md-3 control-label" for="cadastrarCategoria"></label>
    <div class="col-md-6 offset-md-3">
        <button id="cadastrarCategoria" name="cadastrarCategoria" class="btn btn-primary">Cadastrar</button>
    </div>
    </div>

    </fieldset>
</form>    

<?php

  include "view/footer.php";
  
?>