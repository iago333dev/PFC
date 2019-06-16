<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cadastro
 *
 * @author Alisson Soares
 */
class Cadastro {
    //put your code here
    private $nome;
    private $cpf;
    private $telefone;
    private $endereco;
    private $numero;
    private $comp;
    private $uf;
    private $cep;
    private $pais;
    private $email;
    private $usuario2;
    private $senha2;
    
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

        public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getComp() {
        return $this->comp;
    }

    public function getUf() {
        return $this->uf;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getPais() {
        return $this->pais;
    }

    public function getUsuario2() {
        return $this->usuario2;
    }

    public function getSenha2() {
        return $this->senha2;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setComp($comp) {
        $this->comp = $comp;
    }

    public function setUf($uf) {
        $this->uf = $uf;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }

    public function setUsuario2($usuario2) {
        $this->usuario2 = $usuario2;
    }

    public function setSenha2($senha2) {
        $this->senha2 = $senha2;
    }
}
