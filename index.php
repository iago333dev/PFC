<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action = "ModelDao/login.php" method = "POST">
            <input type = "text" name = "usuario" placeholder = "Usuário">
            <input type = "password" name = "senha" placeholder = "Senha">
            <button type = "submit" name="login-submit">Acessar</button> 
        </form>
        <a href="View/cadastrar.html"><button type = "submit" name = "sign-submit">Cadastre-se</button></a>
        <?php
        // put your code here
        ?>
    </body>
</html>
