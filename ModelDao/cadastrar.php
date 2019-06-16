<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include '../ModelDao/conexao.php';
include '../ModelBean/Cadastro.php';

$objeto = new Cadastro();

if(isset($_POST['nome_completo'])){
    $objeto->setNome($_POST['nome_completo']);
}
if(isset($_POST['cpf'])){
    $objeto->setCpf($_POST['cpf']);
}
if(isset($_POST['telefone'])){
    $objeto->setTelefone($_POST['telefone']);
}
if(isset($_POST['endereco'])){
    $objeto->setEndereco($_POST['endereco']);
}
if(isset($_POST['numero'])){
    $objeto->setNumero($_POST['numero']);
}
if(isset($_POST['comp'])){
    $objeto->setComp($_POST['comp']);
}
if(isset($_POST['uf'])){
    $objeto->setUf($_POST['uf']);
}
if(isset($_POST['cep'])){
    $objeto->setCep($_POST['cep']);
}
if(isset($_POST['pais'])){
    $objeto->setPais($_POST['pais']);
}
if($_POST['email'] == $_POST['email2']){
    if(isset($_POST['email'])){
        $objeto->setCpf($_POST['cpf']);
    }
}
if(isset($_POST['usuario2'])){
    $objeto->setUsuario2($_POST['usuario2']);
}
if($_POST['senha2'] == $_POST['senha3']){
    if(isset($_POST['senha2'])){
        $objeto->setSenha2($_POST['senha2']);
    }
}    

$nome = $objeto->getNome();
$cpf = $objeto->getCpf();
$telefone = $objeto->getTelefone();
$endereco = $objeto->getEndereco();
$numero = $objeto->getNumero();
$comp = $objeto->getComp();
$uf = $objeto->getUf();
$cep = $objeto->getCep();
$pais = $objeto->getPais();
$email = $objeto->getEmail();
$usuario2 = $objeto->getUsuario2();
$senha2 = $objeto->getSenha2();

echo $nome;
echo '<br>';
echo $cpf;
echo '<br>';
echo $telefone;
echo '<br>';
echo $endereco;
echo '<br>';
echo $numero;
echo '<br>';
echo $comp;

$query2 = "insert into usuario2 (nome, cpf) values ('$nome', '$cpf');";
echo '<br>';
echo $query2;
mysqli_query($conexao, $query2);