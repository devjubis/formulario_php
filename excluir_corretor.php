<?php

include 'conexao.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    /
    $sql = "DELETE FROM corretores WHERE id = $id";

    if ($conexao->query($sql) === TRUE) {
        echo "Corretor excluído com sucesso!";
    } else {
        echo "Erro ao excluir o corretor: " . $conexao->error;
    }
} else {
    echo "ID do corretor não especificado.";
}


$conexao->close();
?>
