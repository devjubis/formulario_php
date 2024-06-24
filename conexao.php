<?php
// Configurações do banco de dados
$hostname = "127.0.0.1"; 
$username = "root";      
$password = "";          
$database = "corretores"; 

// Conexão com o banco de dados
$conexao = new mysqli($hostname, $username, $password, $database);

// Verifica se há erros na conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}
?>
