<?php

class Produto{

    private $id;
    private $nome;
    private $preco;
    private $quantidade;

    public function __construct($nome,$preco,$quantidade,$id=null){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->id = $id;
    }

    public function getId(){ return $this->id; }
    public function getNome(){ return $this->nome; }
    public function getPreco(){ return $this->preco; }
    public function getQuantidade(){ return $this->quantidade; }

}