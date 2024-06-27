<?php

require_once 'DB.php'; // Inclui arquivo de configuração de conexão com o banco de dados
require_once 'produto.php';

class ProdutoDAO {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function inserirProduto(Produto $produto) {
        try {
            $query = "INSERT INTO produto (nome, categoria, valor, validade) VALUES (:nome, :categoria, :valor, :validade)";
            $stmt = $this->conn->prepare($query);
    
            $nome = $produto->getNome();
            $categoria = $produto->getCategoria();
            $valor = $produto->getValor();
            $validade = $produto->getValidade();
    
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":categoria", $categoria);
            $stmt->bindParam(":valor", $valor);
            $stmt->bindParam(":validade", $validade);
    
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            // Aqui você pode personalizar a mensagem de erro ou registrar o erro em logs
            error_log('Erro ao inserir produto: ' . $e->getMessage());
            return false;
        }
    }

    public function listarProdutos() {
        $query = "SELECT * FROM produto";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function deletarProduto($id_produto) {
        $query = "DELETE FROM produto WHERE id_produto = :id_produto";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id_produto', $id_produto);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

?>