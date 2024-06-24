<?php

include 'conexao.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $sql = "SELECT id, cpf, creci, nome FROM corretores WHERE id = $id";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
       
        $row = $resultado->fetch_assoc();
        echo json_encode($row);
    } else {
        echo "Corretor não encontrado.";
    }
} else {
    echo "ID do corretor não especificado.";
}


$conexao->close();
?>
