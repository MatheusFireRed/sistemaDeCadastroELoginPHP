<?php
    $dbHost = "localhost";
    $dbName = "root";
    $dbSenha = "";
    $dbNomeBancoDeDados ="formulario-gustavo";


    $conexao = new mysqli($dbHost, $dbName, $dbSenha, $dbNomeBancoDeDados);

    //Verifica conexão com o banco de dados
    if($conexao->connect_errno){
        echo "Erro";
    }else{
        echo "Conexão feita com sucesso!";
    }

?>