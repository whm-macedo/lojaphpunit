<?php

include "view/header.php";

?>
<div class="row  d-flex justify-content-center mt-5">
</div>
<div class="col-md-12 d-flex justify-content-center">
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
      <form class="form-horizontal " method="post" action="<?php echo $url; ?>/login/adm">
        <fieldset>

          <!-- Form Name -->

          <legend class="d-flex justify-content-center ml-4 ">
            <figure>
              <img src="<?php echo DIRIMG; ?>doe-final.png" Class="w-50 d-flex justify-content-center ml-5" alt="">
              
            </figure>
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
            <label class=" control-label" for="cadastrar"></label>

            <button id="login" style="width:388px" name="login" class="btn btn-primary formadm">Entrar</button>
            <a class="d-flex justify-content-center " href="">
              <p>Não tenho uma conta</p>
            </a>
          </div>

      </form>
    </div>
    


    </div>
  </div>
</div>
</div>

<?php

include "view/footer.php";

?>