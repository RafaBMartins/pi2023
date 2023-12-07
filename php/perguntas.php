<?php
    session_start();
    if(!isset($_SESSION["email"])){
        header('location: http://localhost/pi2023/login.php');
    }
        if(isset($_POST["resposta"])){
            if(!isset($_SESSION["respostas"])) $_SESSION["respostas"] = array();
            $_SESSION["index"] += 1;
            array_push($_SESSION["respostas"], $_POST["resposta"]);
            header("location: http://localhost/pi2023/pergunta.php");
            die();
        }
    }
    else{
        var_dump($_SESSION["respostas"]);
    }
?>