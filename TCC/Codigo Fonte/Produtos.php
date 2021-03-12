<html>
    <head>
        <title>Produtos Charff</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initialscale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            body{
                background-image: linear-gradient(to right, teal, #000080);
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
        <nav class="navbar navbar-default" style="background-color: rgb(226, 226, 226);">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="color: rgb(0, 128, 128); font-family: blippo, sans-serif; font-size: 35px; font-variant: small-caps; text-shadow: 2px 2px 2px rgb(6, 0, 83)"> Charff </a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Menu Principal</a></li>
                    <li class="active"><a href="#"><b>Produtos</b></a></li>
                    <li><a href="Login.php">ÁREA ADMIN</a></li>
                </ul>
            </div>
        </nav>
        <?php
            include "conexao.php";
            $sql = "SELECT * FROM produtos";
            $consulta = mysqli_query($mysqli, $sql);
        ?>
        <div class="container">
            <h1 style="color: white; text-shadow: 7px 7px 7px rgba(0,0,0,0.5)"> Produtos Charff: </h1>
   
        </div>
        <br><br>
        <div class="album py-5 bg-light">
            <div class="container">
              <div class="row">
              <?php
                  $i = 0;
                  while ($linha = mysqli_fetch_array($consulta)){
                      $n=$linha["nomeProd"];
                      $d=$linha["descricaoProd"];
                      $c=$linha["codProd"];
                      $p=$linha["precoProd"];
              ?>
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow" id="produtos">
                    <div class="card-body">
                      <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><b><?php echo $n; ?> </b></font><font style="vertical-align: inherit;"></font></font></p>
                      <p class="card-text"><font style="vertical-align: inherit;"><?php echo $d; ?></font></p>
                      <div class="d-flex justify-content-between align-items-center"><br>
                        <p class="card-text"><font style="vertical-align: inherit;"><b>Cód.: </b><?php echo $c; ?> </font></p>
                        <p class="card-text"><font style="vertical-align: inherit;"><b>Preço: </b><?php echo $p; ?> </font></p>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                    $i++;
                  }
                ?>
               
              </div>
            </div>
            <br><br><br>
            <footer class="my-5 pt-5 text-muted text-center text-small">
              <p class="mb-1"><font style="vertical-align: inherit;" id="sombra"><font style="vertical-align: inherit;">© 2020-2020 TCC projetado por Filipe Christovão (DS304).</font></font></p>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit; color:rgb(129, 189, 245)">Manual do Usuário</font></font></a></li>
                <li class="list-inline-item"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit; color: rgb(129, 189, 245)">Documentação</font></font></a></li>
                <li class="list-inline-item"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit; color: rgb(129, 189, 245)">Apoio</font></font></a></li>
              </ul>
            </footer>
        </div>
       
    </body>
</html>