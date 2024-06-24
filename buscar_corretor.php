<?php
// Inclui arquivo de conexão
include 'conexao.php';

// Verifica se foi enviado o parâmetro id via GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepara e executa a query SQL para buscar o corretor pelo ID
    $sql = "SELECT id, cpf, creci, nome FROM corretores WHERE id = $id";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        // Retorna os dados do corretor em formato JSON
        $row = $resultado->fetch_assoc();
        echo json_encode($row);
    } else {
        echo "Corretor não encontrado.";
    }
} else {
    echo "ID do corretor não especificado.";
}

// Fecha conexão com o banco de dados
$conexao->close();
?>
