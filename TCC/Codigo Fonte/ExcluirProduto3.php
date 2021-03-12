<?php
  include "verifica_login.php";
?>
<HTML>
    <HEAD>
        <meta charset="utf-8">
        <TITLE>Produto Excluido!</TITLE>
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
    </HEAD>
    <BODY>
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
        <div class="container text-center">
            <h2 id="sombra">Excluir Produto</h2><br>
            <?php
                Include "conexao.php";
                $resposta = $_POST["resposta"];
                $cod = $_POST["codProd"];
                if ($resposta == "N")
                    header("Location: ExcluirProduto1.php");
                else {
                    $sql = "DELETE FROM produtos WHERE codProd = $cod";
                    mysqli_query($mysqli, $sql);
                }
            ?>
            <p id="sombra">O produto foi excluído com sucesso.</P>
            <br /><br />
            <button class="btn btn-default" style="background-color: black; border: black; color: white;"><a href="ExcluirProduto1.php">Voltar</a>
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