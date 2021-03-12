<?php
  include "verifica_login.php";
?>
<html>
    <head>
        <title>Produto Alterado!</title>
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
                opacity: 0.8;
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
                 <!-- form class="col-lg-12" style="text-align: right;" 
                    <button class="btn" type="button">ÁREA ADMIN</button>
                </form> -->
            </div>
        </nav><br>
        <div class="container text-center" style="background-color: black; border: black; opacity: 0.7;">
            <h1 style="color: white; text-shadow: 7px 7px 7px rgba(0,0,0,0.5)"> Alterar Produto: </h1><br>
            <?php
                include "conexao.php";
                $n = $_POST["nomeProd"];
                $d = $_POST["descricaoProd"];
                $p = $_POST["precoProd"];
                $cod = $_POST["codProd"];
            ?>
            <h4 id="sombra">O seguinte produto foi alterado com sucesso:</h4><br>
            <p id="sombra">Nome: <?php echo $n; ?> <br /></p>
            <p id="sombra">Descrição: <?php echo $d; ?> <br /></p>
            <p id="sombra">Preço: <?php echo $p; ?> </p>
            <p id="sombra">Cód. do Produto: <?php echo $cod?> <br></p>
            <?php
                $sql = "UPDATE produtos SET nomeProd = '$n', descricaoProd = '$d', precoProd = '$p' WHERE codProd = $cod"; mysqli_query($mysqli, $sql);
            ?>
            <br />
        </div><br><br>
        <div class="container text-center">
            <button class="btn btn-primary btn-lg btn-block" style="background-color: black; border: black; color: white;"><a href="AlterarProduto1.php">Voltar</a>
        </div><br><br><br><br><br>
        <footer class="my-5 pt-5 text-muted text-center text-small" id="sombra">
      <p class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2020-2020 TCC projetado por Filipe Christovão (DS304)</font></font></p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;  color:rgb(129, 189, 245)">Manual do Usuário</font></font></a></li>
        <li class="list-inline-item"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;  color:rgb(129, 189, 245)">Documentação</font></font></a></li>
        <li class="list-inline-item"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;  color:rgb(129, 189, 245)">Apoio</font></font></a></li>
      </ul>
    </footer>
    </BODY>
</HTML>