<?php

class Violao {

    private $marca;
    private $modelo;
    private int $preco;

    public function __construct($marca, $modelo, int $preco){
        $this->marca;
        $this->modelo;
        $this->preco;
    }

    // Getters
    public function getMarca(){
        return $this->marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getPreco(){
        return $this->preco;
    }

    // Setters
    public function setMarca($par){
        $this->marca = $par;
    }

    public function setModelo($par){
        $this->modelo = $par;
    }

    public function setPreco(int $par){
        $this->preco = $par;
    }

}