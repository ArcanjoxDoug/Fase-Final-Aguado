<?php
    if(!empty($_GET['id'])){
        
        include_once('config.php');
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        
        if($result->num_rows > 0){

            while($user_data = mysqli_fetch_assoc($result))
            {
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $senha = $user_data['senha'];
            }
        }
        else{
            header('location: sistema.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IMG/IMG-ICONS/groovestudio.png">
    <link rel="stylesheet" href="styleLg.css">
    <title>Fazer Login</title>
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
    height: 680px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    padding: 20px;
    box-shadow: -1px -1px 10px black;
}
h2{
    color: white;
    text-align: center;
    font-size: 35px;
    padding-top: 10px;
    padding-bottom: 50px;
}
.jalogin{
    padding-top: 30px;
    display: flex;
    flex-direction: row;
    text-algin: center;
}
h3{
    color: rgb(168, 168, 168);
    padding-left: 10px;
}
a{
    color: rgb(33, 44, 194);
    font-size: 20px;
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
    <form action="save.php" method="post">
        <h2>Cadastro</h2>

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome ?>" required><br><br>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $email ?>"required><br><br>

        <label for="email">Senha</label>
        <input type="text" id="senha" name="senha" value="<?php echo $senha ?>"required><br><br>
        
        <label for="telefone">Telefone</label>
        <input type="tel" id="telefone" name="telefone" value="<?php echo $telefone ?>"required><br><br>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <button type="update" name="update">Editar</button>
    </form>
</body>
</html>