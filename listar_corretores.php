<?php

include 'conexao.php';


$sql = "SELECT id, cpf, creci, nome FROM corretores";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr><th>ID</th><th>CPF</th><th>CRECI</th><th>Nome</th><th>Ações</th></tr>";
    echo "</thead>";
    echo "<tbody>";

    // Loop através dos resultados
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['cpf'] . "</td>";
        echo "<td>" . $row['creci'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td><button onclick='editarCorretor(" . $row['id'] . ")'>Editar</button> <button onclick='excluirCorretor(" . $row['id'] . ")'>Excluir</button></td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "Nenhum corretor encontrado.";
}


$conexao->close();
?>
