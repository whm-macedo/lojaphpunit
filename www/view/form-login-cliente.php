<?php

include "view/header.php";

?>
<div class="row  d-flex justify-content-center mt-5">
</div>
<div class="col-md-12 d-flex justify-content-center">
<form class="form-signin">
      <img class="mb-4 ml-5 d-flex justify-content-center" src="<?php echo DIRIMG; ?>doe-final.png" alt="" width="72" height="72">
      
      <label for="inputEmail" class="sr-only">Usuário</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Usuário" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
      
      <a class="d-flex justify-content-center " href="">
              <p>Não tenho uma conta</p>
            </a>

      <button class="btn btn-lg btn-primary btn-block mt-3 formadm" type="submit">Login</button>
      
    </form>

    </div>
    


    </div>
  </div>
</div>
</div>

<?php

include "view/footer.php";

?>