<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login - Área Admin</title>
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
        #sombra1{
          color: white;
          text-shadow: 7px 7px 7px rgba(0,0,0,0.5);
        }
        ::-webkit-scrollbar {
            display: none;
        }
        </style>
</head>
<body class="text-center">
    <nav class="navbar navbar-default" style="background-color: rgb(226, 226, 226);">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" style="color: rgb(0, 128, 128); font-family: blippo, sans-serif; font-size: 35px; font-variant: small-caps; text-shadow: 2px 2px 2px rgb(6, 0, 83)"> Charff </a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.html">Menu Principal</a></li>
                <li><a href="Produtos.php">Produtos</a></li>
                <li class="active"><a href="#"><b>ÁREA ADMIN</b></a></li>
            </ul>
        </div>
    </nav>
    <?php
        if(isset($_SESSION['nao_autenticado'])):
    ?>
    <div class="notification is-danger" style="background-color: red; color: white;">
        <p>ERRO: Login e/ou senha inválidos.</p>
    </div>
    <?php
        endif;
        unset($_SESSION['nao_autenticado']);
    ?>
    <form class="container" method="POST" action="Login2.php">
            <h1 class="h3 mb-3 font-weight-normal" id="sombra"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ÁREA  ADMIN:</font></font></h1><br>

        <label for="inputName" class="sr-only" id="sombra"><font style="vertical-align: inherit;"><font style="vertical-align: inherit; "></font></font><br></label>
            <h4 class="text-left" id="sombra">Login: </h4>
            <input type="name" name="login" id="inputName" class="form-control" placeholder="Digite seu nome completo" required="" autofocus="" width="400" height="46">
            <h6 class="text-left" id="sombra">login: admin</h6><br>
        <label for="inputPassword" class="sr-only" id="sombra"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Senha</font></font></label>
            <h4 class="text-left" id="sombra">Senha: </h4>
            <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Digite sua senha" required="">
            <h6 class="text-left" id="sombra">senha: admin123</h6>
        <label for="imputNumber" class="sr-only" id="sombra"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CPF: </font></font></label>
            <label>
                <input type="checkbox" value="remember-me"><font style="vertical-align: inherit; color: white"><font style="vertical-align: inherit;"> Lembre de mim</font></font>
            </label>
        </div>
        <br><br>
        <br><button class="btn btn-lg btn-primary btn-block" type="submit" id="sombra" name="entrar"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entrar</font></font></button>
        
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