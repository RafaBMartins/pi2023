<?php
$validos = array();
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email e um email valido");
    array_push($validos, true);
  } else {
    echo("$email nao e um email valido");
  }

  $password = $_POST["password"];
  $regex = "/^(.{8,16})$/";
  if (preg_match($regex,$password)) {
    echo("$password e uma senha valida");
    array_push($validos, true);
  } else {
    echo("$password não e uma senha valida");
  }

  if(sizeof($validos) == 2){
    session_start();
    $_SESSION["email"] = $email;
    $_SESSION["senha"] = $password;
    header('location: http://localhost:8080/pi2023/index.php');
    exit;
  }
?>