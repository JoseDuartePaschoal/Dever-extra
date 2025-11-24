<?php 
include "conexao.php";
$id = $_GET["id"];

$busca = $conn->query("SELECT * FROM contatos WHERE id = $id");
$c = $busca->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Editar Contato</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Editar Contato</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $c['id'] ?>">
    <input type="text" name="nome" value="<?= $c['nome'] ?>" required>
    <input type="email" name="email" value="<?= $c['email'] ?>">
    <input type="text" name="telefone" value="<?= $c['telefone'] ?>">
    <button type="submit">Atualizar</button>
</form>

</body>
</html>