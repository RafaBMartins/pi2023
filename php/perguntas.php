<?php
    session_start();
    $id = $_GET["id"];

    if(!isset($_SESSION["email"])){
        header('location: http://localhost/pi2023/login.php');
        die();
    }
        if(isset($_POST["resposta"])){
            if(!isset($_SESSION["respostas"])) $_SESSION["respostas"] = array();
            $_SESSION["index"] += 1;
            array_push($_SESSION["respostas"], $_POST["resposta"]);
            if($_SESSION["index"] > 4){
                $_SESSION["index"] = 0;
                $qtdSim = 0;
                foreach ($_SESSION["respostas"] as $chave => $valor) {
                    if($valor == "sim") $qtdSim += 1;
                }
                $_SESSION["resposta"] = array();
                if($qtdSim <= 1) $selo = 3;
                if($qtdSim >= 2 || $qtdSim < 4) $selo = 2;
                if($qtdSim > 4) $selo = 1;
                require("pdoConnect.php");
                $consulta = $db->prepare("UPDATE ESTABELECIMENTO SET fk_selo_selo_pk = $selo WHERE id = $id");
                $consulta->execute();              
                header("location: http://localhost/pi2023/pest.php?id=$id");
            }
            else{
                header("location: http://localhost/pi2023/pergunta.php?id=$id");
                die();
            }
        }
    else{
        var_dump($_SESSION["respostas"]);
    }
?>