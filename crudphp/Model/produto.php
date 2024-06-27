<?php

class Produto {
    private $id_produto;
    private $nome;
    private $categoria;
    private $valor;
    private $validade;

    public function getIdProduto() {
        return $this->id_produto;
    }

    public function setIdProduto($id_produto) {
        $this->id_produto = $id_produto;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getValidade() {
        return $this->validade;
    }

    public function setValidade($validade) {
        $this->validade = $validade;
    }
}
