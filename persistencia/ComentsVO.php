<?php

class ComentsVO{
    public $idComents;
    public $coments;
    public $nome;
    public $data;
    public $hora;
            
    function getIdComents() {
        return $this->idComents;
    }
    
    function getNome() {
        return $this->nome;
    }
    
    function getComents() {
        return $this->coments;
    }
    
    function getData() {
        return $this->data;
    }
    
    function getHora() {
        return $this->hora;
    }
        
    function setIdComents($idComents) {
        $this->idComents = $idComents;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setComents($coments) {
        $this->coments = $coments;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }


}

