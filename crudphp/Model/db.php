<?php

$host = 'localhost'; // Endereço do servidor MySQL
$dbname = 'estoque_alimento'; // Nome do seu banco de dados
$username = 'root'; // Nome de usuário do MySQL
$password = ''; // Senha do MySQL

try {
    $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
    exit;
}

