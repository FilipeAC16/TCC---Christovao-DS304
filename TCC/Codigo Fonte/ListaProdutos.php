<?php
  include "verifica_login.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lista de Produtos</title>
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

  <body>
    <nav class="navbar navbar-default" style="background-color: black; border: black;">
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
    <div class="container">
      <h1 style="color: white; text-shadow: 7px 7px 7px rgba(0,0,0,0.5)"> Lista de Produtos - Charff SA.:</h1>
    </div>
    <br><br>
    <?php
        include "conexao.php";
        $sql = "SELECT * FROM produtos";
        $consulta = mysqli_query($mysqli, $sql);
    ?>
    <table class="table">
      <thead>
          <tr>
              <
              <th id="sombra"><b>Nome:</b></th>
              <th id="sombra"><b>Descrição:</b></th>
              <th id="sombra"><b>Código:</b></th>
              <th id="sombra"><b>Preço:</b></th>
          </tr>
      </thead>
      <?php
        $i = 0;
            while ($linha = mysqli_fetch_array($consulta)){
                $n=$linha["nomeProd"];
                $d=$linha["descricaoProd"];
                $c=$linha["codProd"];
                $p=$linha["precoProd"];
      ?>
      <tbody>
            <tr>
              <td id="sombra"><?php echo $n; ?></td>
              <td id="sombra"><?php echo $d; ?></td>
              <td id="sombra"><?php echo $c; ?></td>
              <td id="sombra"><?php echo $p; ?></td>
          </tr>
          <?php
            $i++;
          }
          ?>
     </tbody>
  </table>
  </div>
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