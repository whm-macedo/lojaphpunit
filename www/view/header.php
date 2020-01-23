<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- MAPBOX CSS -->
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo DIRCSS; ?>bootstrap.css">
  <link rel="stylesheet" href="<?php echo DIRFAW; ?>all.css">
  <link rel="stylesheet" href="<?php echo DIRCSS; ?>style.css">
   <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <title>DOE+</title>
</head>



<body>
  <!-- Just an image -->
  <div class="row menubarra">
    <div class="col-md-2 col-sm-1 d-none d-sm-block">

      <nav class="navbar navbar-light headermenu d-flex justify-content-center ">
        <a class="navbar-brand" href="#">
          <img src="<?php echo DIRIMG; ?>doemais.png" width="80" height="55" alt="">
        </a>
      </nav>
    </div>
    <div class="col-md-1 col-sm-1">



    </div>
    <div class="col-md-1 col-sm-1">



    </div>
    <div class="col-md-4 col-sm-3 d-flex justify-content-center ">
      <nav class="navbar navbar-light ">
      <!-- METHOD POST PESQUISA  -->
        <form class="form-inline " method="POST" action="<?php echo $url;?>/produto/buscar/">
          <div class="input-group barrapesquisa">           
            <input type="text" name="nome" class="form-control " placeholder="Pesquisar" aria-label="Username" aria-describedby="basic-addon1">
            <div class="input-group-prepend  ">
              <button class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </form>
        <!-- FIM PESQUISA -->
      </nav>
    </div>
    <div class="col-md-2 col-sm-1 d-flex justify-content-center">
      <div class="dropdown h-25  ">
        <button class="btn btn-secondary dropdown-toggle login mt-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user icon"> 
            <?php
              if (isset($_SESSION['clientenome'])) {
                echo $_SESSION['clientenome'];
              } else {
                echo "Login";
              }
              ?>

      </i></button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <?php
                if (isset($_SESSION['clientenome'])) {?>
                  <a class="dropdown-item" href="<?php echo BASEURL; ?>painel/cliente">Painel Cliente</a>            
                <?php
                }
              ?>
        

        
        <a class="dropdown-item" href="<?php echo BASEURL; ?>login/cliente">Entrar</a>
        
          <a class="dropdown-item" href="<?php echo BASEURL?>cliente/cadastrar">Não tenho cadastro</a>

          <?php
                if (isset($_SESSION['clientenome'])) {?>
                  <a class="dropdown-item" href="<?php echo BASEURL; ?>cliente/logoff">Sair</a>
                <?php
                }
              ?>        

          
        </div>
      </div>
    </div>
    <div class="col-md-2 col-sm-1 d-flex justify-content-center ">
      <a href=" <?php echo BASEURL; ?>carrinho" class="mt-2 imgcar">
      <img class="w-25" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBpZD0iTGF5ZXJfMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNTEyIDUxMiIgaGVpZ2h0PSI1MTJweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTJweCI+PGc+PGc+PHBhdGggZD0ibTQxOS4wOTMgNDUyaC0xNmMtMTcuNjczIDAtMzItMTQuMzI3LTMyLTMyIDAtMTcuNjczIDE0LjMyNy0zMiAzMi0zMmgxNmMxNy42NzMgMCAzMiAxNC4zMjcgMzIgMzIgMCAxNy42NzMtMTQuMzI3IDMyLTMyIDMyeiIgZmlsbD0iI2NkMzIzMiIvPjwvZz48Zz48cGF0aCBkPSJtNDM1LjA5MyAzODhoLTI3MmMtNC40MTggMC04LTMuNTgyLTgtOCAwLTQ0LjExMiAzNS44ODgtODAgODAtODBoNTZjNC40MTggMCA4IDMuNTgyIDggOHMtMy41ODIgOC04IDhoLTU2Yy0zMi41OCAwLTU5LjU1MyAyNC40NzMtNjMuNTAyIDU2aDI2My41MDJjNC40MTggMCA4IDMuNTgyIDggOHMtMy41ODEgOC04IDh6IiBmaWxsPSIjMzIyODNjIi8+PC9nPjxnPjxwYXRoIGQ9Im00MzUuMDkzIDM4OGgtMzY4Yy00LjQxOCAwLTgtMy41ODItOC04IDAtNDQuMTEyIDM1Ljg4OC04MCA4MC04MGg1NmM0LjQxOCAwIDggMy41ODIgOCA4cy0zLjU4MiA4LTggOGgtNTZjLTMyLjU4IDAtNTkuNTUzIDI0LjQ3My02My41MDIgNTZoMzU5LjUwMmM0LjQxOCAwIDggMy41ODIgOCA4cy0zLjU4MSA4LTggOHoiIGZpbGw9IiM0NjNjNGIiLz48L2c+PHBhdGggZD0ibTE5MS4xNTEgODkuNDcgMTEuNTEgMzQuNTNoMTYuODY1bC0xMy4xOTYtMzkuNTljLTMuMjczLTkuODE1LTEyLjQyMy0xNi40MS0yMi43NjktMTYuNDFoLTM2LjQ2OHYxNmgzNi40NjhjMy40NDkgMCA2LjQ5OSAyLjE5OCA3LjU5IDUuNDd6IiBmaWxsPSIjMzIyODNjIi8+PGc+PHBhdGggZD0ibTE3MS4wOTMgOTJoLTI0Yy04LjgzNyAwLTE2LTcuMTYzLTE2LTE2IDAtOC44MzcgNy4xNjMtMTYgMTYtMTZoMjRjOC44MzcgMCAxNiA3LjE2MyAxNiAxNiAwIDguODM3LTcuMTYzIDE2LTE2IDE2eiIgZmlsbD0iIzMyMjgzYyIvPjwvZz48cGF0aCBkPSJtMTA3LjYxOSAxMjQuMjc5LTEzLjI4OS0zOS44NjljLTMuMjczLTkuODE1LTEyLjQyMy0xNi40MS0yMi43NjktMTYuNDFoLTM2LjQ2OHYxNmgzNi40NjhjMy40NDkgMCA2LjQ5OSAyLjE5OCA3LjU5IDUuNDdsMTUuNzg2IDQ3LjM1OWMxLjI2My02LjE5NSA2LjE2OC0xMS4zMjYgMTIuNjgyLTEyLjU1eiIgZmlsbD0iIzQ2M2M0YiIvPjxnPjxwYXRoIGQ9Im0xODYuMTEzIDE0NS4wNiA0OS42ODcgMTQ5LjA2YzQuMzU1IDEzLjA2NiAxNi41ODQgMjEuODggMzAuMzU4IDIxLjg4aDE0NS44NzFjMTMuNzc0IDAgMjYuMDAyLTguODE0IDMwLjM1OC0yMS44ODFsNDkuNjg3LTE0OS4wNmMzLjQ1My0xMC4zNjEtNC4yNTgtMjEuMDYtMTUuMTc5LTIxLjA2aC0yNzUuNjAzYy0xMC45MjEuMDAxLTE4LjYzMiAxMC43LTE1LjE3OSAyMS4wNjF6IiBmaWxsPSIjY2QzMjMyIi8+PC9nPjxnPjxwYXRoIGQ9Im05NS40NDYgMTQ1LjA2IDQ5LjY4NyAxNDkuMDZjNC4zNTYgMTMuMDY2IDE2LjU4NCAyMS44OCAzMC4zNTggMjEuODhoMTQ1Ljg3MWMxMy43NzQgMCAyNi4wMDItOC44MTQgMzAuMzU4LTIxLjg4MWw0OS42ODctMTQ5LjA2YzMuNDUzLTEwLjM2MS00LjI1OC0yMS4wNi0xNS4xNzktMjEuMDZoLTI3NS42MDNjLTEwLjkyMS4wMDEtMTguNjMyIDEwLjctMTUuMTc5IDIxLjA2MXoiIGZpbGw9IiNmZjQ2NDYiLz48L2c+PGc+PGc+PGc+PHBhdGggZD0ibTMyMC40MjcgMjA0aC0xNmMtNC40MTggMC04LTMuNTgyLTgtOHYtMzJjMC00LjQxOCAzLjU4Mi04IDgtOGgxNmM0LjQxOCAwIDggMy41ODIgOCA4djMyYzAgNC40MTgtMy41ODIgOC04IDh6IiBmaWxsPSIjZTZlNmViIi8+PC9nPjxnPjxwYXRoIGQ9Im0yNTYuNDI3IDIwNGgtMTZjLTQuNDE4IDAtOC0zLjU4Mi04LTh2LTMyYzAtNC40MTggMy41ODItOCA4LThoMTZjNC40MTggMCA4IDMuNTgyIDggOHYzMmMwIDQuNDE4LTMuNTgyIDgtOCA4eiIgZmlsbD0iI2U2ZTZlYiIvPjwvZz48Zz48cGF0aCBkPSJtMTkyLjQyNyAyMDRoLTE2Yy00LjQxOCAwLTgtMy41ODItOC04di0zMmMwLTQuNDE4IDMuNTgyLTggOC04aDE2YzQuNDE4IDAgOCAzLjU4MiA4IDh2MzJjMCA0LjQxOC0zLjU4MiA4LTggOHoiIGZpbGw9IiNlNmU2ZWIiLz48L2c+PC9nPjxnPjxnPjxwYXRoIGQ9Im0zMjAuNDI3IDI4NGgtMTZjLTQuNDE4IDAtOC0zLjU4Mi04LTh2LTMyYzAtNC40MTggMy41ODItOCA4LThoMTZjNC40MTggMCA4IDMuNTgyIDggOHYzMmMwIDQuNDE4LTMuNTgyIDgtOCA4eiIgZmlsbD0iI2U2ZTZlYiIvPjwvZz48Zz48cGF0aCBkPSJtMjU2LjQyNyAyODRoLTE2Yy00LjQxOCAwLTgtMy41ODItOC04di0zMmMwLTQuNDE4IDMuNTgyLTggOC04aDE2YzQuNDE4IDAgOCAzLjU4MiA4IDh2MzJjMCA0LjQxOC0zLjU4MiA4LTggOHoiIGZpbGw9IiNlNmU2ZWIiLz48L2c+PGc+PHBhdGggZD0ibTE5Mi40MjcgMjg0aC0xNmMtNC40MTggMC04LTMuNTgyLTgtOHYtMzJjMC00LjQxOCAzLjU4Mi04IDgtOGgxNmM0LjQxOCAwIDggMy41ODIgOCA4djMyYzAgNC40MTgtMy41ODIgOC04IDh6IiBmaWxsPSIjZTZlNmViIi8+PC9nPjwvZz48L2c+PGc+PHBhdGggZD0ibTU5LjA5MyA5MmgtMjRjLTguODM3IDAtMTYtNy4xNjMtMTYtMTYgMC04LjgzNyA3LjE2My0xNiAxNi0xNmgyNGM4LjgzNyAwIDE2IDcuMTYzIDE2IDE2IDAgOC44MzctNy4xNjMgMTYtMTYgMTZ6IiBmaWxsPSIjZmY0NjQ2Ii8+PC9nPjxnPjxjaXJjbGUgY3g9IjQwMy4wOTMiIGN5PSI0MjAiIGZpbGw9IiNmZjQ2NDYiIHI9IjMyIi8+PC9nPjxnPjxjaXJjbGUgY3g9IjQwMy4wOTMiIGN5PSI0MjAiIGZpbGw9IiNlNmU2ZWIiIHI9IjE2Ii8+PC9nPjxnPjxwYXRoIGQ9Im0xMDcuMDkzIDQ1MmgtMTZjLTE3LjY3MyAwLTMyLTE0LjMyNy0zMi0zMiAwLTE3LjY3MyAxNC4zMjctMzIgMzItMzJoMTZjMTcuNjczIDAgMzIgMTQuMzI3IDMyIDMyIDAgMTcuNjczLTE0LjMyNyAzMi0zMiAzMnoiIGZpbGw9IiNjZDMyMzIiLz48L2c+PGc+PGNpcmNsZSBjeD0iOTEuMDkzIiBjeT0iNDIwIiBmaWxsPSIjZmY0NjQ2IiByPSIzMiIvPjwvZz48Zz48Y2lyY2xlIGN4PSI5MS4wOTMiIGN5PSI0MjAiIGZpbGw9IiNlNmU2ZWIiIHI9IjE2Ii8+PC9nPjwvZz48L3N2Zz4K" />
      <span class="badge badge-light mt-0">
        <?php 
          if(isset($_SESSION['carrinho'])){
          $obj = $_SESSION['carrinho'];
          echo $obj->totalItens();
        }else{
          echo "0";
        }
         ?>
      </span>
    </a>
    
    </div>

  </div>
  </div>
  <hr style="background-color: red;  margin: 0;" class="d-none d-sm-block ">
  <div class="row justify-content-center ">
    <!-- <div class="col-md-12 d-flex "> -->
    <nav class="navbar navbar-expand-lg navbar-light ">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo BASEURL; ?>home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASEURL; ?>projeto">Projeto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASEURL; ?>mapas">Mapas</a>
          </li>
          
          <!-- BOTAR PHP -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="<?php echo BASEURL; ?>voluntario">
              Ser voluntario
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASEURL; ?>produto/listar">Loja</a>
          </li>
        </ul>

      </div>

  </div>



  <hr style="background-color: red; margin: 0px;">
  
