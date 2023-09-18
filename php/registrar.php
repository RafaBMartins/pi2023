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

  $passwordAgain = $_POST["passwordAgain"];
  $regex = "/^(.{8,16})$/";
  if (preg_match($regex,$passwordAgain)) {
    echo("$passwordAgain é uma senha válida");
  } else {
    echo("$passwordAgain não é uma senha válida");
  }

  if($password == $passwordAgain) {
    echo("$password é igual a $passwordAgain");
  } else {
    echo("$password não é igual a $passwordAgain")
  }
?>