<?php

$server = "localhost";
$user = "root";
$password = "33779069ar";
$bdname = "restaurante";

$conn = mysqli_connect($server, $user, $password, $bdname);

if ($conn->connect_error) {
    die('Connect Error: ' . $conn->connect_error);
} else {
    echo "conexao feita";
}
?>
