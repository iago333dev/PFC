<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include 'conexao.php'; //Insere a variável de conexão

if(empty($_POST['usuario']) || empty($_POST['senha'])){ //Se os campos USUÁRIO e SENHA estiverem vazios, ele não entrará no sistema
    header('Location: ../index.php');
    exit;
}

if(isset($_POST['usuario'])){
    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']); //Protege contra SQLInjection
}
if(isset($_POST['usuario'])){
    $senha = mysqli_real_escape_string($conexao,$_POST['senha']);
}

$query = "select * from login where login = '$usuario' and senha = md5('$senha')"; //Procura pelo usuário e senha digitados no banco

$result = mysqli_query($conexao, $query); //Envia o comando pro banco

$row = mysqli_num_rows($result); //Verifica se houve retorno

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
}
else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../index.php');
    exit;
}