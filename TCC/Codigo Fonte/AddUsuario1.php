<?php
  include "verifica_login.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro Novo Usuário</title>
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
        #sombra1{
          color: white;
          text-shadow: 7px 7px 7px rgba(0,0,0,0.5);
        }
        ::-webkit-scrollbar {
            display: none;
        }
    </style>

    <script>
        var senhaUsu = document.getElementsByName("senhaUsu")
            , confirm_password = document.getElementsByName("confirm_senhaUsu");

        function validarSenha(){
            if(senhaUsu.value != confirm_senhaUsu.value) {
                confirm_senhaUsu.setCustomValidity("Senhas diferentes!");
            } else {
                confirm_senhaUsu.setCustomValidity('');
            }
        }

        senhaUsu.onchange = validarSenha;
        confirm_senhaUsu.onkeyup = validarSenha;


        var emailUsu = document.getElementsByName("emailUsu")
           , confirm_emailUsu = document.getElementsByName("confirm_emailUsu");

        function validarEmail(){
            if(emailUsu.value != confirm_emailUsu.value) {
                confirm_emailUsu.setCustomValidity("E-mails diferentes!");
            } else {
                confirm_emailUsu.setCustomValidity('');
            }
        }

        emailUsu.onchange = validarEmail;
        confirm_emailUsu.onkeyup = validarEmail;

      </script>
</head>
<body class="text-center">
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
    <form method="post" action="AddUsuario2.php" class="container">
            <h1 class="h3 mb-3 font-weight-normal" id="sombra"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cadastrar Novo Usuário:</font></font></h1><br>

        <label for="inputName" class="sr-only" id="sombra"><font style="vertical-align: inherit;"><font style="vertical-align: inherit; "></font></font><br></label>
            <h4 class="text-left" id="sombra">Nome Completo: </h4>
            <input style="background-color: black; border: black; color: white;" type="name" name="nomeUsu" id="inputName" class="form-control" placeholder="Digite seu nome completo" required="" autofocus="" width="400" height="46">
        <label for="inputEmail" class="sr-only" id="sombra"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E-mail:</font></font></label>
            <h4 class="text-left" id="sombra">E-mail: </h4>
            <input style="background-color: black; border: black; color: white;" type="email" name="emailUsu" id="inputEmail" class="form-control" placeholder="Digite seu e-mail" required="" autofocus="">
        <label for="inputEmail" class="sr-only" id="sombra"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E-mail:</font></font></label>
            <h4 class="text-left" id="sombra">Confirme seu e-mail: </h4>
            <input style="background-color: black; border: black; color: white;" type="email" name="confirm_emailUsu" id="inputEmail" class="form-control" placeholder="Confirme seu e-mail" required="" autofocus="">
        <label for="inputPassword" class="sr-only" id="sombra"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Senha</font></font></label>
            <h4 class="text-left" id="sombra">Senha: </h4>
            <input style="background-color: black; border: black; color: white;" type="password" name="senha" id="inputPassword" class="form-control" placeholder="Digite sua senha" required="">
        <label for="inputPassword" class="sr-only" id="sombra"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Senha</font></font></label>
            <h4 class="text-left" id="sombra">Confirme sua senha: </h4>
            <input style="background-color: black; border: black; color: white;" type="password" name="confirm_senha" id="inputPassword" class="form-control" placeholder="Confirme sua senha" required="">
        <label for="imputNumber" class="sr-only" id="sombra"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CPF: </font></font></label>
            <h4 class="text-left" id="sombra">CPF: </h4>
            <input style="background-color: black; border: black; color: white;" type="number" name="cpf" id="inputNumber" class="form-control" placeholder="Digite seu CPF" required="">
        <label for="imputDate" class="sr-only" id="sombra"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Idade: </font></font></label>
            <h4 class="text-left" id="sombra">Idade: </h4>
            <input style="background-color: black; border: black; color: white;" type="number" name="idade" id="inputNumber" class="form-control" placeholder="Digite sua idade:" required="">    
        <div class="checkbox mb-3">
            <label>
                <input style="background-color: black; border: black; color: white;" type="checkbox" value="remember-me"><font style="vertical-align: inherit; color: white"><font style="vertical-align: inherit;"> Lembre de mim</font></font>
            </label>
        </div>
    <br><button style="background-color: black; border: white 3px; color: white;" class="btn btn-lg btn-primary btn-block" type="submit" id="sombra">Cadastrar Novo Usuário</button>
        
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