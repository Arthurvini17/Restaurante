<?php

include ('../controllers/conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $endereco = $_POST['endereco'];

    $sql = "INSERT INTO usuarios (nome, email, senha, endereco) VALUES ('$nome', '$email', '$senha','$endereco')";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../views/login.php");
        echo "Dados inseridos com sucesso";
    } else {
        echo "Erro ao inserir os dados: " . mysqli_error($conn);
    }
}