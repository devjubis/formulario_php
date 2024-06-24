<?php
// Configurações do banco de dados
$hostname = "127.0.0.1"; // Endereço do servidor MySQL (pode ser 'localhost' ou '127.0.0.1')
$username = "root";      // Nome de usuário do MySQL
$password = "";          // Senha do MySQL
$database = "corretores"; // Nome do banco de dados que você criou no phpMyAdmin

// Conexão com o banco de dados
$conexao = new mysqli($hostname, $username, $password, $database);

// Verifica se há erros na conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}
?>
