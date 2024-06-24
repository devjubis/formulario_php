<?php
// Inclui arquivo de conexão
include 'conexao.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_edit'])) {
    $id = $_POST['id_edit'];
    $cpf = $_POST['cpf'];
    $creci = $_POST['creci'];
    $nome = $_POST['nome'];

  
    $sql = "UPDATE corretores SET cpf = '$cpf', creci = '$creci', nome = '$nome' WHERE id = $id";

    if ($conexao->query($sql) === TRUE) {
        echo "Corretor atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o corretor: " . $conexao->error;
    }
} else {
    echo "Dados do corretor não especificados.";
}


$conexao->close();
?>
