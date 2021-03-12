<?php
  include "verifica_login.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Editando Produto...</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      body{
        background-image: linear-gradient(to right, rgb(96, 100, 67), #383d5c); 
      }
      #sombra{
        color: white;
        text-shadow: 5px 5px 5px rgba(0,0,0,0.5);
      }
      ::-webkit-scrollbar {
        display: none;
      }
    </style>
 
  </head>

  <body>
    <nav class="navbar navbar-default" style="background-color: rgb(0, 0, 0); border:black">
      <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="#" style="color: #383d5c; font-family: blippo, sans-serif; font-size: 35px; font-variant: small-caps; text-shadow: 1px 1px 1px rgb(199, 185, 240)"> Charff </a>
          </div>
          <ul class="nav navbar-nav">
              <li><a href="AreaAdmin.php">Voltar pro Menu</a></li>
              <li><a href="logout.php">SAIR DA ÁREA ADMIN</a></li>
          </ul>
      </div>
    </nav>
    <div class="container text-center">
      <h1 style="color: white; text-shadow: 7px 7px 7px rgba(0,0,0,0.5)"> Cadastrar Novo Produto: </h1>
    </div>
    <br>

    <form class="form-horizontal" method="POST" action="AddProduto2.php">
        <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label" id="sombra">Nome do produto: </label>
          <br><br><div class="container">
            <input style="background-color: black; border: black; color: white;" name="nomeProd" type="name" class="form-control" id="inputName" placeholder="Digite o nome do produto...">
          </div>
        </div>
        <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label" id="sombra">Descrição do produto: </label>
          <br><br><div class="container">
            <textarea style="background-color: black; border: black; color: white;" name="descricaoProd" class="form-control" rows="3" placeholder="Descreva brevemente o produto..."></textarea>
        </div>
        </div>
        <div class="form-group">
            <label for="inputNumber" class="col-sm-2 control-label" id="sombra">Preço do produto: </label>
            <br><br><div class="container">
              <input style="background-color: black; border: black; color: white;" name="precoProd" type="text" class="form-control" id="inputText" value="R$">
            </div>
        </div>
      </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label>
                <input type="checkbox"><h6 id="sombra"> Confirmo as informações digitadas acima. </h6>
              </label>
            </div>
          </div>
        </div><br><br>
        <div class="container">
          <button style="background-color: black; border: white 3px; color: white;" class="btn btn-lg btn-primary btn-block" type="submit" id="sombra">Cadastrar Novo Produto</button>
        </div>
      </form>
      <br><br><br><br>
      <footer class="my-5 pt-5 text-muted text-center text-small" id="sombra">
        <p class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2020-2020 TCC projetado por Filipe Christovão (DS304)</font></font></p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;  color:rgb(129, 189, 245)">Manual do Usuário</font></font></a></li>
          <li class="list-inline-item"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;  color:rgb(129, 189, 245)">Documentação</font></font></a></li>
          <li class="list-inline-item"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;  color:rgb(129, 189, 245)">Apoio</font></font></a></li>
        </ul>
      </footer>

  </body>
</html>
