<?php

include ('../controllers/conexao.php');

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email === 'admin@admin.com' && $senha ==='admin') {
        $_SESSION['admin'] = true;
        header("Location: ../views/admin.php");
        echo "Login de admin realizado";
        exit();
    }
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];




$sql = "SELECT email, senha FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        header("Location: ../views/index.php");
        echo "Login realizado";
    } else {
        echo "Invalido email ou senha";
    }
}
?>