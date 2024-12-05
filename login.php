<?php
    if(isset($_POST['submit'])){

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,senha) VALUES('$nome','$email','$telefone','$senha')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    text-decoration: none;
    scroll-behavior: smooth;
}
body{
    background-color: rgb(8, 8, 14);
    display: flex;
    justify-content: center;
    align-items: center;
}
form{
    display: flex;
    flex-direction: column;
    background-color: rgba(14, 14, 24, 0.555);
    border-radius: 10px;
    width: 500px;
    height: 440px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    padding: 20px;
    box-shadow: -1px -1px 10px black;
}
h3{
    color: white;
    text-align: center;
    font-size: 35px;
    padding-top: 10px;
    padding-bottom: 50px;
}

label{
    font-size: 20px;
    color: rgb(168, 168, 168);
    padding-left: 10px;
}
input{
    border: none;
    outline: none;
    height: 50px;
    border-radius: 10px;
    background-color: rgba(128, 128, 128, 0.103);
    margin-top: 10px;
    color: white;
    text-align: center;
    font-size: 20px;
}
button{
    position:absolute;
    bottom: 50px;
    right: 20px;
    width: 200px;
    border: none;
    background-color: rgb(33, 44, 194);
    border-radius: 10px;
    padding: 20px 40px;
    font-size: 20px;
    color: white;
}
button:hover{
    transform: scale(1.05);
    transition: 0.5s;
}
</style>
<body>
    <form action="processamento_login.php" method="post">
        <h3>Login</h3>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>
        
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br>
        
        <button type="submit">Entrar</button>
    </form>
</body>
</html>