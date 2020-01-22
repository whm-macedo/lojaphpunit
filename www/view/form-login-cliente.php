<?php

include "view/header-cliente.php";

?>
<div class="row">
  <div class="col-md-4">

  </div>
  <div class="col-md-4 d-flex justify-content-center  mt-4">

    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
          <img src="<?php echo DIRIMG; ?>doevermelho.png" alt="first slide">
        </div>

        <!-- Login Form -->
        <form method="POST">
          <div class="form-group mb-2">
            
            <div class="col-md-4">
              <input id="email" name="email" type="email" placeholder="email" class="form-control input-md inputcliente">

            </div>
          </div>

          <!-- Password input-->
          <div class="form-group mb-3">
  
            <div class="col-md-4">
              <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md inputcliente">
            </div>
          </div>
          <button id="login" name="login" class="btn btn-primary ml-3 mb-2 " style="width: 210px;">Login</button>
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="#">Não tenho cadastro ?</a>
        </div>

      </div>
    </div>
  </div>
  <div class="col-md-4">

  </div>
</div>