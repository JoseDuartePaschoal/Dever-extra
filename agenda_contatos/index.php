<?php include "conexao.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Agenda de Contatos</title>
<link rel="stylesheet" href="style.css">
<script src="script.js" defer></script>
</head>
<body>

<h1>Agenda de Contatos</h1>

<a href="adicionar.php" class="botao">Adicionar Contato</a>

<table>
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>

<?php
$result = $conn->query("SELECT * FROM contatos ORDER BY nome ASC");

while ($c = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$c['nome']}</td>";
    echo "<td>{$c['email']}</td>";
    echo "<td>{$c['telefone']}</td>";
    echo "<td>
        <a href='editar.php?id={$c['id']}'>Editar</a>
        <a href='deletar.php?id={$c['id']}' onclick='return confirmar()'>Excluir</a>
    </td>";
    echo "</tr>";
}
?>
</table>

</body>
</html>
