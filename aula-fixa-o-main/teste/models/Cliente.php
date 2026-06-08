<?php

class Cliente{

    private $id;
    private $nome;
    private $cpf;
    private $email;

    public function __construct($nome,$cpf,$email,$id=null){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->id = $id;
    }

    public function getId(){ return $this->id; }
    public function getNome(){ return $this->nome; }
    public function getCpf(){ return $this->cpf; }
    public function getEmail(){ return $this->email; }

}