<?php
  include "verifica_login.php";
?>
<html>
    <head>
        <title>Alterando Produto...</title>
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
        </nav>
        <div class="container">
            <h1 style="color: white; text-shadow: 7px 7px 7px rgba(0,0,0,0.5)"> Alterar Produto: </h1>
   
        </div>
        <br><br>
        <div class="album py-5 bg-light">
            <div class="container">
                <?php
                    include "conexao.php";
                    $nome = $_POST["nomeProd"];
                    $sql = "SELECT * FROM produtos WHERE nomeProd LIKE '%$nome%' ";
                    $consulta = mysqli_query($mysqli, $sql);
                    if (mysqli_num_rows($consulta) == 0)
                        echo "Produto não cadastrado";
                    else{
                        $linha = mysqli_fetch_array($consulta);
                        $n = $linha["nomeProd"];
                        $d = $linha["descricaoProd"];
                        $p = $linha["precoProd"];
                        $cod = $linha["codProd"]; } 
                ?>
                <br />

                <form class="form-horizontal" method="POST" action="AlterarProduto3.php">
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label" id="sombra">Nome do produto: </label>
                        <br><br><div class="container">                                                                
                        <input style="background-color: black; border: black; color: white;" name="nomeProd" type="name" class="form-control" id="inputName" value="<?php echo $n; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label" id="sombra">Descrição do produto: </label>
                    <br><br><div class="container">
                    <textarea style="background-color: black; border: black; color: white;" name="descricaoProd" class="form-control" rows="3" value="<?php echo $d; ?>"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputNumber" class="col-sm-2 control-label" id="sombra">Preço do produto: </label>
                <br><br>
                <div class="container">
                    <input style="background-color: black; border: black; color: white;" name="precoProd" type="text" class="form-control" id="inputText" value="<?php echo $p; ?>">
                </div>
            <input type="hidden" name="codProd" value="<?php echo $cod; ?>" />
        </div>
      </div><br>
        </div>
        <div class="container">
            <br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input class="btn btn-lg btn-primary btn-block col-md-6 mb-6" type="submit" style="background-color: black; border: white 1px; color: white;" value="Alterar Produto" />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <button class="btn btn-lg btn-primary btn-block col-md-6 mb-6" type="submit" style="background-color: black; border: white 1px; color: white;"><a href="AlterarProduto1.php">Voltar</a></button><br>
        </div>
      </form><br>
            </div>
        </div><br><br><br><br><br>
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