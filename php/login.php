<?php
$usuarios = array();


function defaultSanitize($email, $senha){
  $sanitizados = array()
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($sanitizados, filter_var($email, FILTER_SANITIZE_EMAIL));
  }
  else{
    break;
  }
  $regex = "/^(.{8,16})$/";
  if (preg_match($regex,$senha)) {
    array_push($sanitizados, $senha);
  }
  else{
    break;
  }
  return $sanitizados
}


if($_POST["type"] == "login"){
  $dadosSanitizados = defaultSanitize($_POST["email"], $_POST["password"]);
    if(in_array($dadosSanitizados[0], $usuarios)){
      session_start();
      header('location: http://localhost/pi2023/index.php');
      exit;
    }
    else{
      header('location: http://localhost/pi2023/login.php');
      exit;
    }
}

  else{
    $dadosSanitizados = defaultSanitize($_POST["email"], $_POST["password"]);
    if(!(in_array($dadosSanitizados[0], $usuarios))){
    $nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);
      $passwordAgain = $_POST["passwordAgain"];

      if($password == $passwordAgain) {
        echo("$password é igual a $passwordAgain");
        array_push($validos, true);
      } else {
        echo("$password não é igual a $passwordAgain");
      }

      if(sizeof($validos) == 3){
        session_start();
        $_SESSION[$email] = array("nome" => $nome, "password" => $password);
        header("location: http://localhost/pi2023/index.php");
      }
    }
?>