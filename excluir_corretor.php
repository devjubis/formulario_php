<?php
// Inclui arquivo de conexão
include 'conexao.php';

// Verifica se foi enviado o parâmetro id via GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepara e executa a query SQL para excluir o corretor
    $sql = "DELETE FROM corretores WHERE id = $id";

    if ($conexao->query($sql) === TRUE) {
        echo "Corretor excluído com sucesso!";
    } else {
        echo "Erro ao excluir o corretor: " . $conexao->error;
    }
} else {
    echo "ID do corretor não especificado.";
}

// Fecha conexão com o banco de dados
$conexao->close();
?>
