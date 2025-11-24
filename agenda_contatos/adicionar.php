<?php include "conexao.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Adicionar Contato</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Novo Contato</h2>

<form action="" method="POST">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="email" name="email" placeholder="E-mail">
    <input type="text" name="telefone" placeholder="Telefone">
    <button type="submit">Salvar</button>
</form>

<?php
if ($_POST) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $sql = "INSERT INTO contatos (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
    $conn->query($sql);

    header("Location: index.php");
}
?>

</body>
</html>