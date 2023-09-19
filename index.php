<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="/css/index.css" rel="stylesheet">
  <script src="/script/index.js" defer></script>

  <title>WheelieWay</title>
</head>
  <?php 
  include("header.php");
  ?>

  <?php 
    session_start();
    if(isset($_SESSION["email"])){
      echo $_SESSION["email"];
    }
    else{
      echo "sessão não existe";
    }
  ?>

  <?php 
  include("footer.php");
  ?>
</html>