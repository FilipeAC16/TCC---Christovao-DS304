<?php
  include "verifica_login.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Charff SA.</title>
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
      #produtos{
        background-color: white;
      }
      ::-webkit-scrollbar {
        display: none;
      }
    </style>
 
  </head>
  <!-- #0202af -->
  <!-- background-image: linear-gradient(to right, rgb(110, 114, 82), #917c21); --> 
  <body>
    <nav class="navbar navbar-default" style="background-color: rgb(0, 0, 0); border: white;">
      <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="#" style="color: #383d5c; font-family: blippo, sans-serif; font-size: 35px; font-variant: small-caps; text-shadow: 1px 1px 1px rgb(199, 185, 240)"> Charff </a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="logout.php">SAIR DA ÁREA ADMIN</a></li>
        </ul>

          </ul>
      </div>
    </nav>
    <div class="container">
      <main role="main" class="inner cover">
        <h1 class="text-center" id="sombra">BEM-VINDO À ÁREA ADMIN:</h1><br>
        
      </main>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: black; border: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="ConsultaProduto1.php" id="sombra">Consultar Produtos</a></font></font></button>
      <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: black; border: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="ConsultaUsuario1.php" id="sombra">Consultar Usuários</a></font></font></button>
      <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: black; border: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="ListaProdutos.php" id="sombra">Lista de Produtos</a></font></font></button>
      <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: black; border: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="ListaUsuarios.php" id="sombra">Lista de Usuários</a></font></font></button>
      <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: black; border: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="AddProduto1.php" id="sombra">Cadastrar Produtos</a></font></font></button>
      <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: black; border: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="AddUsuario1.php" id="sombra">Cadastrar Usuários</a></font></font></button>
      <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: black; border: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="AlterarProduto1.php" id="sombra">Alterar Produtos</a></font></font></button>
      <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: black; border: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="AlterarUsuario1.php" id="sombra">Alterar Usuários</a></font></font></button>
      <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: black; border: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="ExcluirProduto1.php" id="sombra">Excluir Produtos</a></font></font></button>
      <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: black; border: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="ExcluirUsuario1.php" id="sombra">Excluir Usuários</a></font></font></button>
    </div>
    <br><br><br><br><br>
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