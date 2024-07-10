<?php

    if(isset($_POST['submot']) && !empty($_POST['email'] && !empty($_POST['senha']))){

        include_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT FROM usuarios WHERE email = $email AND senha = $senha"

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1){
            header("Location: login.php")
        }else{
            header("Location: sistema.php")
        }
    }else{
        header('Location: login.php');
    }

?>