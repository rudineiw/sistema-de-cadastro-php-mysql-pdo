<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Usuário</title>
</head>

<body>
    <h1>Cadastro de Usuário</h1>
    <form action="add.php" method="post">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="A">Ativo</option>
            <option value="I">Inativo</option>
        </select><br><br>

        <label for="birthdate">Data de Nascimento:</label>
        <input type="date" name="birthdate" id="birthdate" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>