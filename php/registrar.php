<?php 
$email = $_POST["email"];
$validos = array();
$nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email é um email válido");
    array_push($validos, true);
  } else {
    echo("$email não é um email válido");
  }

  $password = $_POST["password"];
  $regex = "/^(.{8,16})$/";
  if (preg_match($regex,$password)) {
    echo("$password é uma senha válida");
    array_push($validos, true);
  } else {
    echo("$password não é uma senha válida");
  }

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
?>