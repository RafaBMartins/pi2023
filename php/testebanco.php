<?php
    $servername = "db4free.net";
    $username = "wheelieway@localhost";
    $password = "wheelieway123";
    $dbname = "wheelieway";

    try{
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if (!$conn->connect_error) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT nome, email FROM USUARIO";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Loop através dos resultados da consulta
        while ($row = $result->fetch_assoc()) {
            echo "Nome: " . $row["nome"] . " - Email: " . $row["email"] . "<br>";
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }

    $conn->close();
    } catch (Exception $e) {
        // Capture e lide com exceções
        echo "Erro: " . $e->getMessage();
    }
?>