<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'A24S19d06@#';
    $dbName = 'loja_douglas';

    $conexao = new mysqli( $dbHost,  $dbUsername, $dbPassword, $dbName );

    /*
    if($conexao->connect_errno){
        echo "Erro";
    }
    else{
        echo "Conect";
    }
    */
?>