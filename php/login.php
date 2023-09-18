<?php 
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email é um email válido");
  } else {
    echo("$email não é um email válido");
  }

  $password = $_POST["password"];
  $regex = "/^(.{8,16})$/";
  if (preg_match($regex,$password)) {
    echo("$password é uma senha válida");
  } else {
    echo("$password não é uma senha válida");
  }
?>