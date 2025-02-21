<?php
include 'init.php';
include 'functions.php';

$id = $_GET['id'];
$user = getUserById($id);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edição de Usuário</title>
</head>

<body>
    <h1>Edição de Usuário</h1>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">

        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="<?= $user['name'] ?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $user['email'] ?>" required><br><br>

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="A" <?= $user['status'] === 'A' ? 'selected' : '' ?>>Ativo</option>
            <option value="I" <?= $user['status'] === 'I' ? 'selected' : '' ?>>Inativo</option>
        </select><br><br>

        <label for="birthdate">Data de Nascimento:</label>
        <input type="date" name="birthdate" id="birthdate" value="<?= $user['birthdate'] ?>" required><br><br>

        <button type="submit">Salvar Alterações</button>
    </form>
</body>

</html>