<?php

require_once('../pdoConnect.php');
require_once('autenticacao.php');

// array de resposta
$resposta = array();

// verifica se o usuário conseguiu autenticar
if(autenticar($db)) {
	// Se sim, indica que o login foi realizado com sucesso.
	$resposta["sucesso"] = 1;
}
else {
	// senha ou usuario nao confere
	$resposta["sucesso"] = 0;
	$resposta["erro"] = "usuario ou senha nao confere";
}

// Fecha a conexao com o BD
$db = null;

// Converte a resposta para o formato JSON.
echo json_encode($resposta);
?>