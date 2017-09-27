<?php

class LoginVO{
    private $idLogin;
    private $email;
    private $nome;
    private $senha;
    private $situacao;
    
    function getIdLogin() {
        return $this->idLogin;
    }

    function getEmail() {
        return $this->email;
    }

    function getNome() {
        return $this->nome;
    }

    function getSenha() {
        return $this->senha;
    }

    function getSituacao() {
        return $this->situacao;
    }

    function setIdLogin($idLogin) {
        $this->idLogin = $idLogin;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setSituacao($situacao) {
        $this->situacao = $situacao;
    }

}

