<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .tela-login{
            background-color: rgba(0, 0, 0, 0.616);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            font-size: 15px;
            border-radius: 10px;
            color: white;
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="tela-login">
        <form action="testeLogin.php" method="POST">
            <h1>Login</h1>
            <input type="text" name="email" placeholder="Email..">
            <br><br>
            <input type="password" name="senha" placeholder="Senha..">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <a href="formulario.php">cadastrar</a>
        </form>
    </div>
    
</body>
</html>