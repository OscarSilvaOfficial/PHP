<?php

class Violao {

    private $marca;
    private $modelo;
    private int $preco;

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
        return $this->modelo = $par;
    }

    public function setPreco(int $par){
        return $this->preco = $par;
    }
}