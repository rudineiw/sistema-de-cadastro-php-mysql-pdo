<?php
include 'init.php';
include 'functions.php';

$users = listUsers();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Listagem de Usuários</title>
</head>

<body>
    <h1>Listagem de Usuários</h1>
    <a href="form-add.php">Cadastrar Usuário</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Status</th>
                <th>Data de Nascimento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['status'] ?></td>
                    <td>
                        <?php
                        // Formata a data para DD/MM/YYYY
                        $birthdate = new DateTime($user['birthdate']);
                        echo $birthdate->format('d/m/Y');
                        ?>
                    </td>
                    <td>
                        <a href="form-edit.php?id=<?= $user['id'] ?>">Editar</a>
                        <a href="delete.php?id=<?= $user['id'] ?>">Remover</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>