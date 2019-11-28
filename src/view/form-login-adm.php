<?php

  include "view/header.php";
  
?>

<div class='row'>
    <div class='container'>
    
    <div class='col-md-12 d-flex justify-content-center formadm'>
      <form class="form-horizontal " method="post" action="adm">
        <fieldset>

        <!-- Form Name -->
      
        <legend class="d-flex justify-content-center ">  
        <img src="<?php echo $url; ?>/img/doe-final.png" Class="w-75 d-flex justify-content-center ml-5" alt="">
        </legend>

        <!-- Text input-->
        <div class="form-group formadm">
        
        <input id="nome" name="nome" type="text" placeholder="Usuario" class="form-control input-md" required="">
            
        
        </div>

        <!-- Text input-->
        <div class="form-group formadm">  
        
        <input id="senha" name="senha" type="password" placeholder="senha" class="form-control input-md" required="">
            
        
        </div>

        <div class="form-group ">
        <label class=" control-label" for="cadastrar" ></label>
        
            <button id="login" style="width:388px" name="login" class="btn btn-primary formadm">Entrar</button>
            <a class="d-flex justify-content-center " href="">
              <p>Não tenho uma conta</p>
            </a>
        </div>
      
    </form>

<?php

  include "view/footer.php";
  
?>
