<?php
  session_start();
  require('conexao.php');

  if(empty($_POST['login']) || empty($_POST['senha'])) {
    //header('Location: Login.php');
    echo "Empty";
	  exit();
  }
 
  $login = mysqli_real_escape_string($mysqli, $_POST['login']);
  $senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
 
  $query = "SELECT * FROM admins where login = '$login' and senha = '$senha' ";
 
  $result = mysqli_query($mysqli, $query);
 
  $row = mysqli_num_rows($result);
 
  if($row == 1) {
	  $_SESSION['login'] = $login;
    header('Location: AreaAdmin.php');
	  exit();
  } else {
	  $_SESSION['nao_autenticado'] = true;
    header('Location: Login.php');
	  exit();
  }

