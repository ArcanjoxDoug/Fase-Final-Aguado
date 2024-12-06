<?php
    include_once('config.php');

    if(isset($_POST['update'])){   

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];

       $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email',telefone='$telefone',senha='$senha'
       WHERE id='$id'";

       $result = $conexao->query($sqlUpdate);
    }
    header('location: sistema.php');
?>