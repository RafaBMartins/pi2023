<?php
    require("pdoConnect.php");
    session_start();
    $email = $_SESSION["email"];
    $novoNome = filter_var($_POST["novoNome"], FILTER_SANITIZE_STRIMG);
    $consulta = $db->prepare("UPDATE usuario SET nome = $novoNome WHERE email = $email");
    if($consulta->execute()){
        
    }
?>