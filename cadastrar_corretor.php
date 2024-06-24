<?php
// Inclui arquivo de conexão
include 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $cpf = $_POST['cpf'];
    $creci = $_POST['creci'];
    $nome = $_POST['nome'];

    // Prepara e executa a query SQL para inserir os dados
    $sql = "INSERT INTO corretores (cpf, creci, nome) VALUES ('$cpf', '$creci', '$nome')";

    if ($conexao->query($sql) === TRUE) {
        echo "Corretor cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o corretor: " . $conexao->error;
    }
}

// Fecha a conexão com o banco de dados
$conexao->close();
?>
