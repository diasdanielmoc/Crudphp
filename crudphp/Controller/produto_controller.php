<?php

require_once '../Model/produto.php';
require_once '../Model/produto_DAO.php';
require_once '../Model/db.php'; // Inclui arquivo de configuração de conexão com o banco de dados

class ProdutoController {
    private $produto_dao;

    public function cadastrarProduto() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST['nome'];
            $categoria = $_POST['categoria'];
            $valor = $_POST['valor'];
            $validade = $_POST['validade'];
    
            $produto = new Produto();
            $produto->setNome($nome);
            $produto->setCategoria($categoria);
            $produto->setValor($valor);
            $produto->setValidade($validade);
    
            if ($this->produto_dao->inserirProduto($produto)) {
                return "sucesso ao cadastrar o produto.";
            } else {
                return "Erro ao cadastrar o produto.";
            }
        } else {
            return "Requisição inválida.";
        }
    }

    public function listarProdutos() {
        return $this->produto_dao->listarProdutos();
    }

    public function deletarProduto($id_produto) {
        if ($this->produto_dao->deletarProduto($id_produto)) {
            return "Produto deletado com sucesso!";
        } else {
            return "Erro ao deletar o produto.";
        }
    }
}