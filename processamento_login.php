<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $conexao->real_escape_string($_POST['nome']);
    $senha = $conexao->real_escape_string($_POST['senha']);

    // Consulta ao banco de dados
    $sql = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {

        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] = $nome;
        header("Location: indexpro.php");
    } else {
        unset($_SESSION['senha']);
        unset($_SESSION['nome']);
        echo "Nome ou senha incorretos.";
        header("Location: login.php");

    }
}

?>